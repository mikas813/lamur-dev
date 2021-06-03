const submitButton = document.querySelector('button');
const getNode = (selector) => document.querySelector(selector);

const validate = (email) => {
  if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(
      email)) {
    showModal('Thank you!');
    getNode('form').submit();
    getNode('form').reset();
  } else {
    showModal('You have entered an invalid email address!');
  }
};

const showModal = (text) => {
  getNode('.message').innerText = text;
  getNode('.modal').style.display = 'block';
  setTimeout(() => {
    getNode('.modal').style.display = 'none';
  }, 2000);
};

const submit = (e) => {
  const inputValue = getNode('#email').value;
  e.preventDefault();
  validate(inputValue);
};

submitButton.addEventListener('click', submit);