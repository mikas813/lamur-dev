const emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
const getNode = (selector) => document.querySelector(selector);
const toggleCSS = ($el, prop, val) => {
  getNode($el).style[prop] = val;
  setTimeout(() => getNode($el).style[prop] = 'none', 2000);
};

const showModal = (text) => {
  getNode('.message').innerText = text;
  toggleCSS('.modal', 'display', 'block');
};

const validate = (email) => {
  if (emailRegExp.test(email)) {
    showModal('Thank you!', 'success');
    setTimeout(() => getNode('form').submit(), 250);
  } else if (email === '') {
    showModal('Please fill in an Email!');
  } else {
    showModal('You have entered an invalid email address!');
  }
};

const submit = (e) => {
  e.preventDefault();
  validate(getNode('#email').value);
};

getNode('button').addEventListener('click', submit);