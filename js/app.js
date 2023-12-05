new Vue({
    el: '#app',
    data: {
      username: '',
      password: '',
      errorMessage: ''
    },
    methods: {
      login() {
        // Perform login authentication here
        // For example, you can check username and password against a predefined set of credentials
        if (this.username === 'username' && this.password === 'password') {
          // Redirect to the dashboard or another page on successful login
          // For example: window.location.href = 'dashboard.html';
          console.log('Login successful');
        } else {
          this.errorMessage = 'Invalid username or password';
        }
      }
    }
  });
  