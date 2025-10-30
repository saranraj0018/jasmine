const loginBtn = document.getElementById('loginBtn');
  const loginModal = document.getElementById('loginModal');
  const closeModal = document.getElementById('closeModal');

  loginBtn.addEventListener('click', () => {
    loginModal.classList.remove('hidden');
  });

  closeModal.addEventListener('click', () => {
    loginModal.classList.add('hidden');
  });

  // Optional: close modal on background click
  loginModal.addEventListener('click', (e) => {
    if (e.target === loginModal) loginModal.classList.add('hidden');
  });