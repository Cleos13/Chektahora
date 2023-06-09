<script>
  // Obtén todos los botones "Ver más"
  var moreButtons = document.querySelectorAll(".more-button");

  // Recorre cada botón y agrega un controlador de eventos clic
  moreButtons.forEach(function(button) {
    button.addEventListener("click", function(event) {
      event.preventDefault(); // Evita el comportamiento predeterminado del enlace

      // Encuentra el contenedor del producto más cercano
      var productItem = button.closest(".product-item");
      // Encuentra el elemento de información adicional dentro del contenedor del producto
      var additionalInfo = productItem.querySelector(".additional-info");

      additionalInfo.classList.toggle("d-none");
    });
  });
</script>