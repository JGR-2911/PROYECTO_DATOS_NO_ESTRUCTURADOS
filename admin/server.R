library(shiny)
library(ggplot2)
library(mongolite)

# Establecer la conexión a la base de datos MongoDB
conexion <- mongo(collection = "estado", db = "sequia",
                  url = "mongodb://localhost:27017/")

# Obtener los datos de la colección
datos <- conexion$find()


ui <- fluidPage(
  titlePanel("Gráfica de estados por región"),
  sidebarLayout(
    sidebarPanel(
      # Agrega controles adicionales aquí si es necesario
    ),
    mainPanel(
      plotOutput("plot")
    )
  )
)


server <- function(input, output) {
  output$plot <- renderPlot({
    # Contar la frecuencia de cada estado por región
    conteo <- aggregate(list(Cantidad = datos$estado), by = list(Región = datos$region), FUN = length)
    
    # Crear la gráfica utilizando ggplot2
      ggplot(conteo, aes(x = Región, y = Cantidad, fill = Región)) +
      geom_bar(stat = "identity") +
      labs(x = "Región", y = "Cantidad") +
      theme(axis.text.x = element_text(angle = 45, hjust = 1))
    })
  
    
}

shinyApp(ui, server)



