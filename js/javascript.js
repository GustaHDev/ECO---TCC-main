/////////////////////////////////////
// tabs
//////////////////////////////////////
const tabs = document.querySelectorAll('.tab-btn');
const contents = document.querySelectorAll('.content');

tabs.forEach(tab => tab.addEventListener('click', () => tabClicked(tab)));


const tabClicked = (tab) => {
  tabs.forEach(tab => tab.classList.remove('active'));
  tab.classList.add('active');

  contents.forEach(content => content.classList.remove('show'));

  const contentId = tab.getAttribute('content-id');
  const content = document.getElementById(contentId);
  content.classList.add('show');

}

console.log(contents)

const currentActiveTab = document.querySelector('.tab-btn.active');
tabClicked(currentActiveTab);

/////////////////////////////////////
// login
//////////////////////////////////////

const loginButton = document.getElementById('login');
const modal = document.querySelector('#modal');
const closeModal = document.querySelector('#close-modal');

loginButton.addEventListener('click', () => toggleModal())
closeModal.addEventListener('click', () => toggleModal())

const toggleModal = () => {
  modal.classList.toggle('hide');
  contents.forEach(content => content.classList.toggle('fade'));
}

