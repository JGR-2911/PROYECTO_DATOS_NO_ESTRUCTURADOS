library(mongolite)
library(ggplot2)
library(shiny)

# Establecer la conexión a la base de datos MongoDB
conexion <- mongo(collection = "reporte", db = "sequia", url = "mongodb://localhost:27017/")

# Obtener los datos de la colección
datos <- conexion$find()

# Calcular la suma de los datos del campo "incendios"
suma_incendios <- sum(datos$incendios)

# Crear la gráfica
ggplot() +
  geom_bar(aes(x = "", y = suma_incendios), stat = "identity", fill = "blue") +
  labs(x = NULL, y = "Suma de Incendios", title = "Gráfica de la suma de incendios")

