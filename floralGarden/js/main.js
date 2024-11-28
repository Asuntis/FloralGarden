(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()

  function applyFilter() {
    const plantType = document.getElementById('plant-type').value;
    const careRequirements = document.getElementById('care-requirements').value;
    const size = document.getElementById('size').value;

    const plants = document.querySelectorAll('#plant-list .plant');

    plants.forEach(plant => {
        const type = plant.getAttribute('data-type');
        const care = plant.getAttribute('data-care');
        const plantSize = plant.getAttribute('data-size');

        if ((plantType === "" || plantType === type) &&
            (careRequirements === "" || careRequirements === care) &&
            (size === "" || size === plantSize)) {
            plant.style.display = 'block';
        } else {
            plant.style.display = 'none';
        }
    });
}


$('.product_counter').change(function() {
  var elements = $('.product_price');
  var counters = $('.product_counter');
  var sum_price = 0;
  var total = $('#total_sum');
  
  elements.each(function(index, element) {
      // Извлекаем цену, удаляя все символы кроме чисел и запятой/точки
      let product_value = element.innerText.replace(/[^\d.,]/g, '');
      let number = parseFloat(product_value.replace(',', '.')); // Преобразуем строку в число с плавающей точкой
      
      let count = parseInt(counters.eq(index).val()); // Получаем количество из соответствующего инпута
      if (!isNaN(number) && !isNaN(count)) { // Проверяем, что оба значения валидны
          sum_price += number * count;
      }
  });

  total.val(sum_price + " ₽"); // Округляем до 2 знаков после запятой
});

