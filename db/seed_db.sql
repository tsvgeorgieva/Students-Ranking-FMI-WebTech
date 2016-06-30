insert into specialities(name) values("Software Engineering");

insert into classes(name, speciality_id) values("SE 2011/2015", 1);
insert into classes(name, speciality_id) values("SE 2012/2016", 1);
insert into classes(name, speciality_id) values("SE 2013/2017", 1);

insert into groups(name, class_id) values("Group 1", 1);
insert into groups(name, class_id) values("Group 2", 1);
insert into groups(name, class_id) values("Group 3", 1);
insert into groups(name, class_id) values("Group 1", 2);
insert into groups(name, class_id) values("Group 2", 2);
insert into groups(name, class_id) values("Group 3", 2);
insert into groups(name, class_id) values("Group 1", 3);
insert into groups(name, class_id) values("Group 2", 3);
insert into groups(name, class_id) values("Group 3", 3);

insert into courses(name, description) values ("Web Technologies", "Web Technologies description");
insert into courses(name, description) values ("XML Technologies", "XML Technologies description");
insert into courses(name, description) values ("OOP", "OOP description");
insert into courses(name, description) values ("Programing Basics", "Programing Basics description");

insert into courses_specialities(course_id, speciality_id) values (1, 1);
insert into courses_specialities(course_id, speciality_id) values (2, 1);
insert into courses_specialities(course_id, speciality_id) values (3, 1);
insert into courses_specialities(course_id, speciality_id) values (4, 1);

insert into students(name, faculty_number, group_id) values ("Merrill Barker", "61001", 1);
insert into students(name, faculty_number, group_id) values ("Claire Lynn", "61002", 1);
insert into students(name, faculty_number, group_id) values ("Matilda Hardin", "61003", 2);
insert into students(name, faculty_number, group_id) values ("Knight Sanders", "61004", 2);
insert into students(name, faculty_number, group_id) values ("Summers Glass", "61005", 3);
insert into students(name, faculty_number, group_id) values ("Britney Alford", "61006", 3);
insert into students(name, faculty_number, group_id) values ("Tina Jacobs", "61007", 4);
insert into students(name, faculty_number, group_id) values ("Cameron Patterson", "61008", 4);
insert into students(name, faculty_number, group_id) values ("Marshall Hart", "61009", 5);
insert into students(name, faculty_number, group_id) values ("Harper Cobb", "61010", 5);
insert into students(name, faculty_number, group_id) values ("Wendy Goff", "61011", 6);
insert into students(name, faculty_number, group_id) values ("Mckay Snyder", "61012", 6);
insert into students(name, faculty_number, group_id) values ("Francesca Chambers", "61013", 7);
insert into students(name, faculty_number, group_id) values ("Letha Gray", "61014", 7);
insert into students(name, faculty_number, group_id) values ("Burnett Stewart", "61015", 8);
insert into students(name, faculty_number, group_id) values ("Goodman Parrish", "61016", 8);
insert into students(name, faculty_number, group_id) values ("Elisabeth Cole", "61017", 9);
insert into students(name, faculty_number, group_id) values ("Jewell Miles", "61018", 9);

insert into activities(name, points, course_id) values ("Homework", 2, 1);
insert into activities(name, points, course_id) values ("Lecture attendance", 5, 1);
insert into activities(name, points, course_id) values ("Exercise attendance", 5, 1);
insert into activities(name, points, course_id) values ("Course project", 20, 1);
insert into activities(name, points, course_id) values ("Participate in class", 10, 1);
insert into activities(name, points, course_id) values ("Homework", 2, 2);
insert into activities(name, points, course_id) values ("Lecture attendance", 5, 2);
insert into activities(name, points, course_id) values ("Exercise attendance", 5, 2);
insert into activities(name, points, course_id) values ("Weekly test", 2, 2);
insert into activities(name, points, course_id) values ("Homework", 2, 3);
insert into activities(name, points, course_id) values ("Lecture attendance", 5, 3);
insert into activities(name, points, course_id) values ("Tutoring", 5, 3);
insert into activities(name, points, course_id) values ("Homework", 2, 4);
insert into activities(name, points, course_id) values ("Lecture attendance", 5, 4);
insert into activities(name, points, course_id) values ("Presentation", 5, 4);

insert into students_activities(student_id, activity_id, datetime) values (1, 1, STR_TO_DATE('1-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (1, 2, STR_TO_DATE('10-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (1, 2, STR_TO_DATE('15-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (1, 2, STR_TO_DATE('11-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (2, 1, STR_TO_DATE('1-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (2, 1, STR_TO_DATE('10-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (2, 1, STR_TO_DATE('10-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (2, 2, STR_TO_DATE('12-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (2, 3, STR_TO_DATE('11-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (2, 5, STR_TO_DATE('17-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (10, 1, STR_TO_DATE('1-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (10, 2, STR_TO_DATE('10-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (10, 2, STR_TO_DATE('15-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (10, 2, STR_TO_DATE('11-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (12, 1, STR_TO_DATE('1-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (12, 1, STR_TO_DATE('10-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (12, 1, STR_TO_DATE('10-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (12, 2, STR_TO_DATE('12-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (13, 3, STR_TO_DATE('11-3-2016', '%d-%m-%Y'));
insert into students_activities(student_id, activity_id, datetime) values (13, 5, STR_TO_DATE('17-3-2016', '%d-%m-%Y'));
