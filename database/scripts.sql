CREATE DATABASE situation;


-- User Table
CREATE TABLE Users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    fullname VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL, -- Use appropriate length for hashed passwords
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Role Table
CREATE TABLE Role (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE
);

-- Junction Table for Many-to-Many Relationship
CREATE TABLE Users_Role (
    users_id INT,
    role_id INT,
    PRIMARY KEY (users_id, role_id),
    FOREIGN KEY (users_id) REFERENCES Users(id) ON DELETE CASCADE,
    FOREIGN KEY (role_id) REFERENCES Role(id) ON DELETE CASCADE
);


-- Sample Users
INSERT INTO User (username,fullname, password) VALUES
-- Hash for: 123456
('admin','Abelqoudouss Chabab','$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa');
('user1','Najat Elmakhloufi' ,'$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa');
('user2', 'Anas Fihar','$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa');
('user3', 'Ibtihal Roujane','$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa');
('user4', 'Aymane Elgmiri','$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa');
('user5', 'Zakaria Elhani','$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa');
('user6', 'Ibtissam Lamtioui','$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa');
('user7', 'Abdelouahab Elouafi','$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa');
('user8', 'Mohammed Abdellatif','$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa');
('user9', 'Fatima sadiqui','$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa');
('user9', 'Mehdi Acherouaou','$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa');

-- Sample Roles
INSERT INTO Role (name) VALUES
('Admin');
('User');
('Moderator');

-- Assign Roles to Users
INSERT INTO Users_Role (users_id, role_id) VALUES
(1, 1), -- Assign 'Admin' role to user with id 1
(2, 2), -- Assign 'User' role to user with id 2
(3, 2), -- Assign 'User' role to user with id 3
(4, 2); -- Assign 'User' role to user with id 4
