
const sliderRange = () => {
  const range = document.getElementById('formArea');
  const rangeValue = document.getElementById('range-value');

  range.addEventListener('input', () => {
    const value = (range.value - range.min) / (range.max - range.min) * 100;
    range.style.background = 'linear-gradient(to right, #be69d5 ' + (value) + '%, #BAF1FF ' + value + '%)';
    const valueArea = Math.round(range.max * value / 100);
    rangeValue.textContent = valueArea;
  });
};
sliderRange();

const swapMenu = () => {
  const dropdown = document.querySelector('.dropdown');
  const closeDropdown = document.querySelector('.close');
  const dropMenu = document.querySelector('.drop_menu');

  dropMenu.addEventListener('click', (e) => {
    dropdownActive(e);
  });

  closeDropdown.addEventListener('click', () => {
    closeDropdown.classList.remove('active');
    dropdown.classList.remove('active');
  });

  function dropdownActive(e) {
    if (dropdown.classList.contains('active') && closeDropdown.classList.contains('active')) {
      closeDropdown.classList.remove('active');
      dropdown.classList.remove('active');
    };
    closeDropdown.classList.add('active');
    dropdown.classList.add('active');

    dropdown.onmouseleave = () => {
      setTimeout(() => {
        dropdown.classList.remove('active');
        closeDropdown.classList.remove('active');
      }, 2000);
    };
  };
};
swapMenu();

const getArticul = () => {
  const form = document.getElementById('form-go-articul');
  form.addEventListener('submit', formSend);
  async function formSend(e) {
    e.preventDefault();
    let error = formValidate(form);

    let formData = new FormData(form);//берем все данные из формы
    //formData.append('image', formImage.files[0]); // Добавляем изображение
    let response = await fetch('sendart.php', {
      method: 'GET',
      body: formData
    });

      if (response.ok) {
        let result = await response.json();
        alert(result.message);
        formPreview.innerHTML = '';
        form.reset();
        // form.classList.remove('_sending');
      } else {
        alert('Ошибка');
        // form.classList.remove('_sending');
      }
    
  }
};