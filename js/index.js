const submitButton = document.querySelector('button');

const getNode = (selector) => document.querySelector(selector);

const validate = (email) => {
  if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
  {
    showModal('Thank you!');
    getNode('form').submit();
    return (true)
  }
    showModal('You have entered an invalid email address!');
  return (false)
};

const showModal = (text) => {
  getNode('.message').innerText = text;
  getNode('.modal').style.display = 'block';
  setTimeout(() => {
    getNode('.modal').style.display = 'none'
  }, 2000)
};

const submit = (e) => {
  let inputValue = getNode('#email').value;
  e.preventDefault();
  validate(inputValue);
  getNode('form').reset();
};

submitButton.addEventListener('click', submit);