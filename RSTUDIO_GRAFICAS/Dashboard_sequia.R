library(shiny)
library(leaflet)
library(mongolite)
library(ggplot2)

# Establecer la conexión a la base de datos MongoDB
conexion <- mongo(collection = "estado", db = "sequia",
                  url = "mongodb://localhost:27017/")

# Crear la conexión a la base de datos MongoDB
conexion_reporte <- mongo(collection = "reporte", db = "sequia",
                          url = "mongodb://localhost:27017/")

# Obtener los datos de la colección estado 
datos <- conexion$find()

ui <- fluidPage(
  
  
  titlePanel("DASHBOARD SEQUIA EN MEXICO"),
  sidebarLayout(
    sidebarPanel( width = 3,
      selectInput("estado", "Selecciona un estado:", choices = datos$estado),
      # Puedes agregar más controles adicionales aquí si es necesario
      htmlOutput("simbologia")
    ),
    
    fluidRow(
      column(width = 4,  leafletOutput("mapa"),tableOutput("tablaEstado")),
      column(width = 4,  plotOutput("plot"))
    )
    
  )
)

server <- function(input, output) {
  output$mapa <- renderLeaflet({
    #SIMBOLOGIA 
    output$simbologia <- renderUI({
      # Agrega aquí tu simbología deseada en formato HTML
      HTML("<h4>Simbología Cultivos:</h4>
          <ul>
            <li><span style='color: green;'>1 Retraso de la siembra</span></li>
            <li><span style='color: green;'>2 Algunos daños</span></li>
            <li><span style='color: orange;'>3 Probables pérdidas</span></li>
            <li><span style='color: red;'>4 Pérdidas mayores</span></li>
            <li><span style='color: red;'>5 Pérdidas excepcionales</span></li>
          </ul>
           
          <h4>Simbología Incendios:</h4>
          <ul>
            <li><span style='color: green;'>1 Existe riesgo</span></li>
            <li><span style='color: green;'>2 Probable riesgo</span></li>
            <li><span style='color: orange;'>3 Alto riesgo</span></li>
            <li><span style='color: red;'>4 Riesgo extremo</span></li>
            <li><span style='color: red;'>5 Riesgo excepcional</span></li>
          </ul>
          
          
          <h4>Simbología Restricción:</h4>
          <ul>
            <li><span style='color: green;'>1 Sin restricción</span></li>
            <li><span style='color: green;'>2 Restricción voluntaria</span></li>
            <li><span style='color: orange;'>3 Restricción impuesta</span></li>
            <li><span style='color: red;'>4 Restricción generalizada</span></li>
            <li><span style='color: red;'>5 Situación de emergencia</span></li>
          </ul>
          
          
          <h4>Simbología Promedio:</h4>
          <ul>
            <li><span style='color: green;'>1 Anormalmente seco</span></li>
            <li><span style='color: green;'>2 Sequia Moderada</span></li>
            <li><span style='color: orange;'>3 Sequia severa</span></li>
            <li><span style='color: red;'>4 Sequia Extrema</span></li>
            <li><span style='color: red;'>5 Sequia Excepcional</span></li>
          </ul>
          
           ")
    })
    
    output$plot <- renderPlot({
      estado_s <- input$estado
      resultado <- conexion_reporte$aggregate(sprintf('[
      { "$match": { "estado": "%s" } },{ "$group": { "_id": null, 
       "incendio_t": { "$sum": "$incendios"},
       "cultivos_t": { "$sum": "$cultivos" },
       "restriccion_t": { "$sum": "$restriccion" }
      }}]', estado_s))
      suma_i <- resultado$incendio_t
      suma_c <- resultado$cultivos_t
      suma_r <- resultado$restriccion_t
      
      datos <- data.frame(Tienda = input$estado, Suma_Manzanas = suma_i)
      
      datos <- data.frame(Categoria = c("Riesgo de incendios", "Daños a cultivos","Restricción agua"),
                          Resultados = c(suma_i, suma_c, suma_r))
      
      ggplot(datos, aes(x = Categoria, y = Resultados, fill = Categoria)) +
        geom_bar(stat = "identity") +
        labs(x = "Categoría", y = "Total") +
        theme_minimal()
      
    })
    
    
    
    # Obtener la información del estado seleccionado
    estado_info <- reactive({
      estado_seleccionado <- input$estado
      conexion_reporte$find(query = paste('{"estado": "', estado_seleccionado, '"}', sep = ""))
    })
    
    # Renderizar la tabla con la información del estado
    output$tablaEstado <- renderTable({
      estado_info()
    })
    
    
    
    # Filtrar los datos según el estado seleccionado
    estado_seleccionado2 <- input$estado
    datos_estado <- datos[datos$estado == estado_seleccionado2, ]
    
    # Crear el objeto de mapa leaflet
    mapa <- leaflet(data = datos_estado) %>%
      addTiles() %>%
      addCircleMarkers(
        lat = ~latitud, 
        lng = ~longitud, 
        color = "red", 
        fillOpacity = 1.8,
        radius = 10
      )%>%
      setView(lng = -100, lat = 23, zoom = 4) # Ajustar los valores
    
    mapa  # Devolver el mapa
    
    
  })
}

shinyApp(ui, server)