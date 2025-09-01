# AI Exam Supervisor Platform

![System Diagram](https://media.licdn.com/dms/image/v2/D4E22AQEzAcs72_p40w/feedshare-shrink_2048_1536/B4EZS3mjekGwAo-/0/1738247138906?e=1759363200&v=beta&t=TFU1kJI0B0PU9k7mO0yASBmwTzvrolosgVKp0WBjnLo)

## Project Overview

**AI Exam Supervisor** is an advanced Laravel-based platform designed to revolutionize academic assessments. It empowers educators to create, manage, and monitor exams with AI-powered supervision, ensuring integrity and transparency. The system leverages face tracking and behavioral analysis to detect suspicious activities, providing a secure and fair environment for both students and teachers.

## Key Features

- **Exam Creation:** Easily build custom exams with unique access links.
- **Student Registration:** Simple forms for students to enroll and access exams.
- **AI Supervision:** Real-time monitoring using face tracking and behavioral analytics.
- **Interactive Dashboard:** Rich statistics and insights for teachers and administrators.
- **Modern UI:** Responsive, user-friendly interface supporting Arabic and English.

## Illustrations

### Home Page
![Home Page](https://media.licdn.com/dms/image/v2/D4E22AQEuo8qR4fetEA/feedshare-shrink_2048_1536/B4EZS3mjciHoAo-/0/1738247138644?e=1759363200&v=beta&t=7qewGpZy5p9A4rw-aCYOsxUYme7y7x_MPLoadD_uudE)

### Create Exam Page
![Create Exam](https://media.licdn.com/dms/image/v2/D4E22AQFOIWqqAxaqxw/feedshare-shrink_2048_1536/B4EZS3mjcFHcA0-/0/1738247127759?e=1759363200&v=beta&t=Suh26Q_Bbw_Ze6FDUc8Nmo_i_vAU2dYAfqPV0lRhv9w)

### Student Exam Registration Form
![Exam Registration Form](https://media.licdn.com/dms/image/v2/D4E22AQH1xK57UXynnQ/feedshare-shrink_2048_1536/B4EZS3mjcuG0Ao-/0/1738247129582?e=1759363200&v=beta&t=dhTAC4o5T0LpIVG0vZvSJbYEVcgU6PdAcBQhUb0ch_E)

### Take Exam Page
![Take Exam](https://media.licdn.com/dms/image/v2/D4E22AQHPNjeMdNrG0g/feedshare-shrink_2048_1536/B4EZS3mjeuGYAs-/0/1738247144117?e=1759363200&v=beta&t=X6WAbk7wdvGCiTwoeAsAj5oqZ6Xx00MsrFngchxRTOM)

### Dashboard & Statistics
![Dashboard](https://media.licdn.com/dms/image/v2/D4E22AQGeEM3NS322Uw/feedshare-shrink_2048_1536/B4EZS3mjeMHUAs-/0/1738247140564?e=1759363200&v=beta&t=I7jmBlC5B-7nxUBwLPLt_woCd1Q0T-UL8FmvCGhxm4Y)

## Technical Stack

- **Backend:** Laravel (PHP)
- **Frontend:** Blade, TailwindCSS, JQuery
- **Database:** MySQL
- **AI/Face Tracking:** face-api.js, clmtrackr
- **Real-time:** Pusher, Laravel Echo

## Getting Started

1. **Install dependencies:**
    ```sh
    composer install
    npm install
    ```
2. **Configure environment:**
    - Copy `.env.example` to `.env` and update database and Pusher credentials.
3. **Run migrations:**
    ```sh
    php artisan migrate
    ```
4. **Start the development server:**
    ```sh
    php artisan serve
    ```
5. **Access the app:**  
   Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.

## Contribution

This project welcomes contributions to improve digital education and academic integrity. Feel free to fork, submit issues, or propose enhancements.

---

**AI Exam Supervisor** is a leap toward transparent, fair, and secure digital assessments.