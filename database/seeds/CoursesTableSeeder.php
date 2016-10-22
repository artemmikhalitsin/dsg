<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->delete();

        DB::table('courses')->insert([
            [
                'course_code' => 'COMP 232',
                'course_name' => 'Mathematics for Computer Science',
                'description' => 'Sets. Propositional logic and predicate calculus. Functions and relations. 
                                  Elements of number theory. Proof techniques: direct proof, indirect proof, 
                                  proof by contradiction, proof by induction.',
                'credits' => 3,
                'instructor_id' => 1
            ],
            [
                'course_code' => 'COMP 248',
                'course_name' => 'Object-Oriented Programming I',
                'description' => 'Introduction to programming. Basic data types, variables, expressions, 
                                  assignments, control flow. Classes, objects, methods. Information hiding, 
                                  public vs. private visibility, data abstraction and encapsulation. References. Arrays.',
                'credits' => 3,
                'instructor_id' => 2
            ],
            [
                'course_code' => 'ENGR 201',
                'course_name' => 'Professional Practice & Responsibility',
                'description' => 'Health and safety issues for engineering projects: Quebec and Canadian legislation; 
                                  safe work practices; general laboratory safety common to all engineering disciplines, 
                                  and specific laboratory safety pertaining to particular engineering disciplines. Review 
                                  of the legal framework in Quebec, particularly the Professional Code and the Engineers 
                                  Act, as well as professional ethics.',
                'credits' => 1.5,
                'instructor_id' => 4
            ],
            [
                'course_code' => 'ENGR 213',
                'course_name' => 'Applied Ordinary Differential Equations',
                'description' => 'This course introduces Engineering students to the theory and application of ordinary 
                                  differential equations. Definition and terminology, initial-value problems, separable 
                                  differential equations, linear equations, exact equations, solutions by substitution, 
                                  linear models, orthogonal trajectories, complex numbers, form of complex numbers: powers 
                                  and roots, theory: linear equations, homogeneous linear equations with constant 
                                  coefficients, undetermined coefficients, variation of parameters, Cauchy-Euler equation, 
                                  reduction of order, linear models: initial value, review of power series, power series 
                                  solutions, theory, homogeneous linear systems, solution by diagonalisation, non-homogeneous 
                                  linear systems. Eigenvalues and eigenvectors.',
                'credits' => 3,
                'instructor_id' => 5
            ],
            [
                'course_code' => 'COMP 249',
                'course_name' => 'Object-Oriented Programming II',
                'description' => 'Design of classes. Inheritance. Polymorphism. Static and dynamic binding. 
                                  Abstract classes. Exception handling. File I/O. Recursion. Interfaces and 
                                  inner classes. Graphical user interfaces. Generics. Collections and iterators.',
                'credits' => 3,
                'instructor_id' => 2
            ],
            [
                'course_code' => 'ENGR 233',
                'course_name' => 'Applied Advanced Calculus',
                'description' => 'This course introduces Engineering students to the theory and application of 
                                  advanced calculus. Functions of several variables, partial derivatives, total and 
                                  exact differentials, approximations with differentials. Tangent plane and normal 
                                  line to a surface, directional derivatives, gradient. Double and triple integrals. 
                                  Polar, cylindrical, and spherical coordinates. Change of variables in double and 
                                  triple integrals. Vector differential calculus; divergence, curl, curvature, line 
                                  integrals, Green’s theorem, surface integrals, divergence theorem, applications of 
                                  divergence theorem, Stokes’ theorem.',
                'credits' => 3,
                'instructor_id' => 5
            ],
            [
                'course_code' => 'SOEN 228',
                'course_name' => 'System Hardware',
                'description' => 'Processor structure, Data and Instructions, Instruction Set Processor (ISP) level 
                                  view of computer hardware, assembly language level use. Memory systems — RAM and 
                                  disks, hierarchy of memories. I/O organization, I/O devices and their diversity, 
                                  their interconnection to CPU and Memory. Communication between computers at the 
                                  physical level. Networks and computers.',
                'credits' => 4,
                'instructor_id' => 1
            ],
            [
                'course_code' => 'SOEN 287',
                'course_name' => 'Introduction to Web Applications',
                'description' => 'Internet architecture and protocols. Web applications through clients and servers. 
                                  Markup languages. Client-side programming using scripting languages. Static website 
                                  contents and dynamic page generation through server-side programming. Preserving 
                                  state (client-side) in web applications.',
                'credits' => 3,
                'instructor_id' => 8
            ],
            [
                'course_code' => 'COMP 348',
                'course_name' => 'Principles of Programming Languages',
                'description' => 'Survey of programming paradigms: Imperative, functional, and logic 
                                  programming. Issues in the design and implementation of programming
                                  languages. Declaration models: binding, visibility, and scope. Type 
                                  systems, including static and dynamic typing. Parameter passing 
                                  mechanisms. Hybrid language design.',
                'credits' => 3,
                'instructor_id' => 7
            ],
            [
                'course_code' => 'COMP 352',
                'course_name' => 'Data Structures and Algorithms',
                'description' => 'Abstract data types: stacks and queues, trees, priority queues, dictionaries. 
                                  Data structures: arrays, linked lists, heaps, hash tables, search trees. 
                                  Design and analysis of algorithms: asymptotic notation, recursive algorithms, 
                                  searching and sorting, tree traversal, graph algorithms.',
                'credits' => 3,
                'instructor_id' => 7
            ],
            [
                'course_code' => 'ENCS 282',
                'course_name' => 'Technical Writing and Communication',
                'description' => 'Technical writing form and style. Technical and scientific papers, abstracts, 
                                  reports. Library research and referencing methods for engineers and computer 
                                  scientists. Technical communication using information technology: document 
                                  processing software, computer-assisted presentation, analysis and design of 
                                  web presentation, choice and use of appropriate tools. Students will prepare an 
                                  individual major report and make an oral presentation.',
                'credits' => 3,
                'instructor_id' => 6
            ],
            [
                'course_code' => 'ENGR 202',
                'course_name' => 'Sustainable Development and Environmental Stewardship',
                'description' => 'Introduction to the concept of sustainable development and the approaches for 
                                  achieving it. Relationships with economic, social, and technological development. 
                                  Methods for evaluating sustainability of engineering projects, including 
                                  utilization of relevant databases and software. Impact of engi­neering design and 
                                  industrial development on the environment. Case studies. ',
                'credits' => 1.5,
                'instructor_id' => 4
            ],
        ]);
    }
}
