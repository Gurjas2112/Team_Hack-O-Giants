CREATE TABLE Users (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(20) CHECK (role IN ('admin', 'teacher', 'student')) NOT NULL,
    phone VARCHAR(20)
);

CREATE TABLE ClassSchedule (
    id SERIAL PRIMARY KEY,
    course_name VARCHAR(100) NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL,
    room_number VARCHAR(50),
    teacher_id INTEGER NOT NULL,
    FOREIGN KEY (teacher_id) REFERENCES Users(id) ON DELETE CASCADE
);
CREATE TABLE Student_ClassSchedule (
    student_id INTEGER NOT NULL,
    class_schedule_id INTEGER NOT NULL,
    PRIMARY KEY (student_id, class_schedule_id),
    FOREIGN KEY (student_id) REFERENCES Users(id) ON DELETE CASCADE,
    FOREIGN KEY (class_schedule_id) REFERENCES ClassSchedule(id) ON DELETE CASCADE
);
CREATE TABLE Attendance (
    id SERIAL PRIMARY KEY,
    attendance_date DATE NOT NULL,
    status VARCHAR(10) CHECK (status IN ('Present', 'Absent')) NOT NULL,
    student_id INTEGER NOT NULL,
    teacher_id INTEGER NOT NULL,
    FOREIGN KEY (student_id) REFERENCES student(student_id) ON DELETE CASCADE,
    FOREIGN KEY (teacher_id) REFERENCES teacher(teacher_id) ON DELETE SET NULL
);
CREATE TABLE Notification (
    id SERIAL PRIMARY KEY,
    message TEXT NOT NULL,
    date_sent TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_id INTEGER NOT NULL,
    FOREIGN KEY (user_id) REFERENCES Users(id) ON DELETE CASCADE
);
CREATE TABLE Event (
    id SERIAL PRIMARY KEY,
    event_name VARCHAR(100) NOT NULL,
    event_date DATE NOT NULL,
    description TEXT
);
CREATE TABLE student (
    student_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    date_of_birth DATE NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone_number VARCHAR(15),
    address VARCHAR(255),
    enrollment_date DATE NOT NULL,
    major VARCHAR(100),
    course_name VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL
);


CREATE TABLE teacher (
    teacher_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone_number VARCHAR(15),
    address VARCHAR(255),
    department VARCHAR(100)
);

CREATE TABLE teacher_subject (
    teacher_id INT,
    subject VARCHAR(100),
    FOREIGN KEY (teacher_id) REFERENCES teacher(teacher_id)
);