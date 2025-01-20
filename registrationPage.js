function submitRegistration() {
    // Get form field values
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const userType = document.getElementById('user-type').value;
    const registrationType = document.querySelector('input[name="registration-type"]:checked').value;

    // Create registration object
    const registration = {
      name: name,
      email: email,
      password: password,
      userType: userType,
      registrationType: registrationType
    };

    // Display registration object in console
    console.log(registration);

    // Reset form fields
    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('password').value = '';
    document.getElementById('user-type').value = 'organizer';
    document.getElementById('free').checked = true;
  }