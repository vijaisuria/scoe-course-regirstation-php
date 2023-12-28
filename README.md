# SCOE Course Registration System

This web application is designed to facilitate course registration for students for Simens Centre of Excellence, MIT campus, Anna University. It is built using PHP and MySQL.

## Features

- **User Authentication**: Students and administrators can log in securely.
- **Course Listing**: View available courses with details such as title, description, and available slots.
- **Registration**: Students can register for courses, and administrators can manage registrations.
- **Admin Panel**: Admins have access to an admin dashboard to manage courses, student registrations, and user accounts.

## Installation

To set up this application locally, follow these steps:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/vijaisuria/scoe-course-regirstation-php.git
   ```

2. **Database Setup**:
   - Create a MySQL database (scoe).
   - Import the `scoe-db.sql` file provided in the `database` folder to set up the necessary tables and initial data.

3. **Configuration**:
   - Navigate to the `config` folder.
   - Update `connection.php` with your MySQL database credentials.

4. **Run the Application**:
   - Deploy the application on a PHP server (e.g., Apache, Nginx, XAMPP).
   - Access the application through your browser.

## Usage

- **Student Registration**:
  - Students can create an account or log in if they already have one.
  - Browse available courses, view details, and register for desired courses.

- **Admin Panel**:
  - Admins can log in with elevated privileges.
  - Access the admin dashboard to manage courses, student registrations, and user accounts.

## Technologies Used

- PHP
- MySQL
- HTML/CSS
- JavaScript 
- [Bootstrap@5.3.0](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
- [Google Font 'Poppins'](https://fonts.google.com/specimen/Poppins)

## Acknowledgements

- Special thanks to [MIT School of College of Engineering (MIT-Scoe)](https://mitindia.edu/en/research-centres/mit_scoe) for inspiration and reference.
- Special thanks to [Google Font 'Poppins'](https://fonts.google.com/specimen/Poppins) and [Bootstrap@5.3.0](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
  for their contributions to this project.

## Contributing

Contributions are welcome! Feel free to submit pull requests or open issues for any bugs or feature requests.

## License

This project is licensed under the [MIT License](LICENSE).
