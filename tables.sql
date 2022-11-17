CREATE TABLE workouts (
workout VARCHAR(50),
  PRIMARY KEY (workout));



insert into workouts(workout) values
('lower1'),
 ('lower2'),
('lower3'),
('upper2'),
('upper3'),
('fullbody1') ,
('fullbody3'),
('chest'),
( 'back'),
('arms'),
('shoulders'),
('legs');
	

create table lower1 (
exercise VARCHAR(32),
PRIMARY KEY (exercise));

insert into lower1(exercise) values
('4-way Deadbug'), ('Squats'), ('Leg Extension'), ('Seated Leg Curl'),('Romanian Deadlift');

create table lower2 (
exercise VARCHAR(32),
PRIMARY KEY (exercise));

insert into lower2(exercise) values
    ('Deadlift'),('Front Squat'),('Single Leg Extension'),('Back Extension'),('Hip Thrusts'),('Calf Raises');

create table lower3 (
exercise VARCHAR(32),
PRIMARY KEY (exercise));

insert into lower3(exercise) values
    ('Box Jumps'),('Snatch Pulls'),('Front Squat'),('Kettlebell Swings'), ('Planks');

create table upper1 (
exercise VARCHAR(32),
PRIMARY KEY (exercise));

insert into upper1(exercise) values
    ('Incline Bench'),('Pull ups'), ('Cable Rows'), ('Flat DB Bench'),('DB Flyes');

create table upper2 (
exercise VARCHAR(32),
PRIMARY KEY (exercise));

insert into upper2(exercise) values
    ('Bench Press'),
    ('Barbell Rows'),
     ('Chest Flyes'),
    ('Reverse Flyes'),
    ('DB Presses');

create table upper3(
	exercise VARCHAR(32),
PRIMARY KEY (exercise));

insert into upper3(exercise) values
    ('Overhead Press'),
    ('Lat Pulldown'),
    ('Close Grip Bench Press'),
    ('Incline Flyes'),
    ('Barbell Row');

create table fullbody1(
	exercise VARCHAR(32),
PRIMARY KEY (exercise)	);

insert into fullbody1(exercise) values
    ('Squat'),
    ('Bench Press'),
    ('Leg Extension'),
    ('Single Leg Deadlift'),
    ('Dumbbell Overhead Press');

create table fullbody2(
	exercise VARCHAR(32),
PRIMARY KEY (exercise)	);

insert into fullbody2(exercise) values
    ('Deadlift'),
    ('Barbell Push Press'),
    ('Lateral Raises'),
    ('Front Squat'),
    ('Tricep Pushdown'),
    ('Bicep Curls');

create table fullbody3(
	exercise VARCHAR(32),
PRIMARY KEY (exercise) );

insert into fullbody3(exercise) values
    ('Box Jumps'),
    ('Power Clean'),
    ('Snatch Pull'),
    ('Dumbell Bench Press'),
    ('Barbell Rows');

create table chest(
	exercise VARCHAR(32),
PRIMARY KEY (exercise)	);

insert into chest(exercise) values
    ('Bench Press'),
   ('Incline Bench Press'),
    ('Flat Dumbell Flyes'),
    ('Close Grip Bench Press'),
    ('Dumbell Bench Press'),
    ('Med Ball Push ups'),
    ('Pushups'),
    ('Floor Press');

create table back(
	exercise VARCHAR(32),
PRIMARY KEY (exercise));


INSERT INTO back(exercise) VALUES
    ('Barbell Rows'),
    ('Dumbbell Rows'),
    ('Single Arm Dumbell Rows'),
    ('Lat Pulldowns'),
    ('Close grip Lat Pulldowns'),
    ('Seated Cable Rows'),
    ('Reverse Flyes'),
    ('Back Extension');

create table arms(
	exercise VARCHAR(32),
	PRIMARY KEY (exercise));


INSERT INTO arms(exercise) VALUES
    ('Biceps 21’s'),
    ('Tricep Pressdown'),
    ('Skull Crusher');
   

create table shoulders(
exercise VARCHAR(32),
PRIMARY KEY (exercise));

INSERT INTO shoulders(exercise) VALUES
    ('Overhead Press'),
    ('Dumbell Press'),
    ('Lateral Raises'),
    ('Arnold Press'),
    ('Shrugs');

create table legs(
exercise VARCHAR(32),
PRIMARY KEY (exercise));

INSERT INTO legs(exercise) VALUES
    ('Squats'),
    ('Front Squats'),
    ('Leg Press'),
    ('Hack Squat'),
    ('Leg extension'),
    ('Single Leg Extensions'),
    ('Belt Squats'),
    ('Box Squats'),
    ('Step Ups'),
     ('Deadlift'),
     ('Trap Bar Deadlift'),
     ('Romanian Deadlift'),
    ('Leg Curls'),
   ('Kettlebell Swings'),
    ('Single Leg Kettlebell Deadlift'),
     ('Hip Thrusters');

create table Difficulty(
	Diff VARCHAR(30),
PRIMARY KEY (Diff));


INSERT INTO Difficulty(Diff) VALUES
    ('Beginner'),
    ('Intermediate'),
    ('Advanced');

create table num_sets(
	number_of_sets INT NOT NULL,
	PRIMARY KEY(number_of_sets));

INSERT INTO num_sets(number_of_sets) VALUES
    (2),
    (3),
    (4),
    (5);

create table reps(
	Reps INT NOT NULL,
	PRIMARY KEY(Reps));

INSERT INTO reps(Reps) VALUES
    (3),
   (5),
    (8),
     (10),
    (12),
    (13),
    (25);