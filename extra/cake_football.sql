USE cake_football;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(255) NOT NULL,
    is_superuser BOOLEAN DEFAULT FALSE,
    created DATETIME,
    modified DATETIME
);


CREATE TABLE picks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    game_id INT NOT NULL,
    team_id INT NOT NULL,
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY game_key (game_id) REFERENCES games(id),
    FOREIGN KEY user_key (user_id) REFERENCES users(id),
    FOREIGN KEY team_key (team_id) REFERENCES teams(id)
);


CREATE TABLE teams (
    id INT AUTO_INCREMENT PRIMARY KEY,
    logo VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    created DATETIME,
    modified DATETIME
);


CREATE TABLE games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    home_team_id INT NOT NULL,
    away_team_id INT NOT NULL,
    week_id INT NOT NULL,
    is_playoff BOOLEAN DEFAULT FALSE,
    is_championship BOOLEAN DEFAULT FALSE,
    is_superbowl BOOLEAN DEFAULT FALSE,
    home_points INT,
    away_points INT,
    value INT,
    game_time DATETIME,
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY home_team_key (home_team_id) REFERENCES teams(id),
    FOREIGN KEY away_team_key (away_team_id) REFERENCES teams(id),
    FOREIGN KEY week_key (week_id) REFERENCES weeks(id)
);


CREATE TABLE weeks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    season_id INT NOT NULL,
    week_number INT NOT NULL,
    value INT DEFAULT 10,
    is_post_season BOOLEAN DEFAULT FALSE,
    week_start DATETIME,
    week_end DATETIME,
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY season_key (season_id) REFERENCES seasons(id)
);


CREATE TABLE seasons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    year INT NOT NULL,
    created DATETIME,
    modified DATETIME
);


INSERT INTO seasons (year, created, modified)
VALUES 
(2022, NOW(), NOW())
;

INSERT INTO weeks (season_id, week_number, value, is_post_season, week_start, week_end, created, modified)
VALUES 
(1, 1, 10, false, '2022-09-06 00:00:00', '2022-09-12 23:59:59', NOW(), NOW()),
(1, 2, 10, false, '2022-09-13 00:00:00', '2022-09-19 23:59:59', NOW(), NOW()),
(1, 3, 10, false, '2022-09-20 00:00:00', '2022-09-26 23:59:59', NOW(), NOW()),
(1, 4, 10, false, '2022-09-27 00:00:00', '2022-10-03 23:59:59', NOW(), NOW()),
(1, 5, 10, false, '2022-10-04 00:00:00', '2022-10-10 23:59:59', NOW(), NOW()),
(1, 6, 10, false, '2022-10-11 00:00:00', '2022-10-17 23:59:59', NOW(), NOW()),
(1, 7, 10, false, '2022-10-18 00:00:00', '2022-10-24 23:59:59', NOW(), NOW()),
(1, 8, 10, false, '2022-10-25 00:00:00', '2022-10-31 23:59:59', NOW(), NOW()),
(1, 9, 10, false, '2022-11-01 00:00:00', '2022-11-07 23:59:59', NOW(), NOW()),
(1, 10, 10, false, '2022-11-08 00:00:00', '2022-11-14 23:59:59', NOW(), NOW()),
(1, 10, 10, false, '2022-11-15 00:00:00', '2022-11-21 23:59:59', NOW(), NOW()),
(1, 12, 10, false, '2022-11-22 00:00:00', '2022-11-28 23:59:59', NOW(), NOW()),
(1, 13, 10, false, '2022-11-29 00:00:00', '2022-12-05 23:59:59', NOW(), NOW()),
(1, 14, 10, false, '2022-12-06 00:00:00', '2022-12-12 23:59:59', NOW(), NOW()),
(1, 15, 10, false, '2022-12-13 00:00:00', '2022-12-19 23:59:59', NOW(), NOW()),
(1, 16, 10, false, '2022-12-20 00:00:00', '2022-12-26 23:59:59', NOW(), NOW()),
(1, 17, 10, false, '2022-12-27 00:00:00', '2023-01-02 23:59:59', NOW(), NOW()),
(1, 18, 10, false, '2023-01-03 00:00:00', '2023-01-09 23:59:59', NOW(), NOW()),
(1, 19, 0, true, '2023-01-10 00:00:00', '2023-01-16 23:59:59', NOW(), NOW()),
(1, 20, 0, true, '2023-01-17 00:00:00', '2023-01-23 23:59:59', NOW(), NOW()),
(1, 21, 0, true, '2023-01-24 00:00:00', '2023-01-30 23:59:59', NOW(), NOW()),
(1, 22, 0, true, '2023-01-31 00:00:00', '2023-02-06 23:59:59', NOW(), NOW())
;

INSERT INTO users (email, username, password, role, firstname, lastname, created, modified)
VALUES
('jmac2244@gmail.com', 'password', 'secret', 'user', 'Jay', 'Maccio', NOW(), NOW()),
('nromano@gmail.com','passwword', 'secret', 'user', 'Nick', 'Romano', NOW(), NOW()),
('sreynolds@gmail.com','password', 'secret', 'user', 'Scott', 'Reynolds', NOW(), NOW()),
('mfrizzell@gmail.com','password', 'secret', 'user', 'Mark', 'Frizzell', NOW(), NOW())
;

INSERT INTO teams (logo, name, created, modified)
VALUES
('arizona_cardinals.gif', 'Arizona Cardinals', NOW(), NOW()),
('atlanta_falcons.gif', 'Atlanta Falcons', NOW(), NOW()),
('baltimore_ravens.gif', 'Baltimore Ravens', NOW(), NOW()),
('buffalo_bills.gif', 'Buffalo Bills', NOW(), NOW()),
('carolina_panthers.gif', 'Carolina Panthers', NOW(), NOW()),
('chicago_bears.gif', 'Chicago Bears', NOW(), NOW()),
('cincinnatti_bengals.gif', 'Cincinnatti Bengals', NOW(), NOW()),
('cleveland_browns.gif', 'Cleveland Browns', NOW(), NOW()),
('dallas_cowboys.gif', 'Dallas Cowboys', NOW(), NOW()),
('denver_broncos.gif', 'Denver Broncos', NOW(), NOW()),
('detroit_lions.gif', 'Detroit Lions', NOW(), NOW()),
('green_bay_packers.gif', 'Green Bay Packers', NOW(), NOW()),
('houston_texans.gif', 'Houston Texans', NOW(), NOW()),
('indianapolis_colts.gif', 'Indianapolis Colts', NOW(), NOW()),
('jacksonville_jaguars.gif', 'Jacksonville Jaguars', NOW(), NOW()),
('kansas_city_chiefs.gif', 'Kansas City Chiefs', NOW(), NOW()),
('las_vegas_raiders.gif', 'Las Vegas Raiders', NOW(), NOW()),
('los_angeles_chargers.gif', 'Los Angeles Chargers', NOW(), NOW()),
('los_angeles_rams.gif', 'Los Angeles Rams', NOW(), NOW()),
('miami_dolphins.gif', 'Miami Dolphins', NOW(), NOW()),
('minnesota_vikings.gif', 'Minnesota Vikings', NOW(), NOW()),
('new_england_patriots.gif', 'New England Patriots', NOW(), NOW()),
('new_orleans_saints.gif', 'New Orleans Saints', NOW(), NOW()),
('new_york_giants.gif', 'New York Giants', NOW(), NOW()),
('new_york_jets.gif', 'New York Jets', NOW(), NOW()),
('philadelphia_eagles.gif', 'Philadelphia Eagles', NOW(), NOW()),
('pittsburgh_steelers.gif', 'Pittsburgh Steelers', NOW(), NOW()),
('san_fransisco_49ers.gif', 'San Fransisco 49ers', NOW(), NOW()),
('seattle_seahawks.gif', 'Seattle Seahawks', NOW(), NOW()),
('tampa_bay_buccaneers.gif', 'Tampa Bay Buccaneers', NOW(), NOW()),
('tennessee_titans.gif', 'Tennessee Titans', NOW(), NOW()),
('washington_commanders.gif', 'Washington Commanders', NOW(), NOW())
;
