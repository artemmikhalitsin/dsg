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
              'course_code' => '﻿ENGR 108',
              'course_name' => 'Engineering Industrial Experience Reflective Learning I ',
              'description' => 'This course is a reflective learning module for students in their related field which is based on their academic requirements and their first industrial experience.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 201',
              'course_name' => 'Professional Practice and Responsibility ',
              'description' => 'Health and safety issues for engineering projects: Quebec and Canadian legislation; safe work practices; general laboratory safety common to all engineering disciplines, and specific laboratory safety pertaining to particular engineering disciplines. Review of the legal framework in Quebec, particularly the Professional Code and the Engineers Act, as well as professional ethics. Lectures: one and a half hours per week. Tutorial: one hour per week, alternate weeks.',
              'credits' => 1.5
            ],
            [
              'course_code' => 'ENGR 202',
              'course_name' => 'Sustainable Development and Environmental Stewardship ',
              'description' => 'Introduction to the concept of sustainable development and the approaches for achieving it. Relationships with economic, social, and technological development. Methods for evaluating sustainability of engineering projects, including utilization of relevant databases and software. Impact of engi­neering design and industrial development on the environment. Case studies. Lectures: one and a half hours per week.',
              'credits' => 1.5
            ],
            [
              'course_code' => 'ENGR 208',
              'course_name' => 'Engineering Industrial Experience Reflective Learning II ',
              'description' => 'This course expands on the students’ second industrial experience term in their related field of study to further develop their knowledge and work-related skills.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 213',
              'course_name' => 'Applied Ordinary Differential Equations ',
              'description' => 'This course introduces Engineering students to the theory and application of ordinary differential equations. Definition and terminology, initial-value problems, separable differential equations, linear equations, exact equations, solutions by substitution, linear models, orthogonal trajectories, complex numbers, form of complex numbers: powers and roots, theory: linear equations, homogeneous linear equations with constant coefficients, undetermined coefficients, variation of parameters, Cauchy-Euler equation, reduction of order, linear models: initial value, review of power series, power series solutions, theory, homogeneous linear systems, solution by diagonalisation, non-homogeneous linear systems. Eigenvalues and eigenvectors. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 233',
              'course_name' => 'Applied Advanced Calculus ',
              'description' => 'This course introduces Engineering students to the theory and application of advanced calculus. Functions of several variables, partial derivatives, total and exact differentials, approximations with differentials. Tangent plane and normal line to a surface, directional derivatives, gradient. Double and triple integrals. Polar, cylindrical, and spherical coordinates. Change of variables in double and triple integrals. Vector differential calculus; divergence, curl, curvature, line integrals, Green’s theorem, surface integrals, divergence theorem, applications of divergence theorem, Stokes’ theorem. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 242',
              'course_name' => 'Statics ',
              'description' => 'Resultant of force systems; equilibrium of particles and rigid bodies; distributed forces; statically determinate systems; trusses; friction; moments of inertia; virtual work. Shear and bending moment diagrams. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 243',
              'course_name' => 'Dynamics ',
              'description' => 'Kinematics of a particle and rigid body; forces and accelerations; work and energy; impulse and momentum; dynamics of a system of particles and rigid bodies, introduction to vibrations. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 244',
              'course_name' => 'Mechanics of Materials ',
              'description' => 'Mechanical behaviour of materials; stress; strain; shear and bending moment diagrams; introduction to inelastic action. Analysis and design of structural and machine elements subjected to axial, torsional, and flexural loadings. Combined stresses and stress transformation. Deflections. Introduction to elastic stability. Lectures: three hours per week. Tutorial: two hours per week. Laboratory: three hours per week, alternate weeks.',
              'credits' => 3.75
            ],
            [
              'course_code' => 'ENGR 245',
              'course_name' => 'Mechanical Analysis ',
              'description' => 'Forces in a plane and in space, moments of forces, Varignon’s theorem, rigid bodies in equilibrium, free-body diagram. Centroids, centres of gravity. Distributed forces, moments of inertia. Principle of virtual work. Kinematics of particles and rigid bodies. Forces and accelerations; work and energy; impulse and momentum. Kinetics of particles and rigid bodies. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 251',
              'course_name' => 'Thermodynamics I ',
              'description' => 'Basic principles of thermodynamics and their application to various systems composed of pure substances and their homogeneous non-reactive mixtures. Simple power production and utilization cycles. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 290',
              'course_name' => 'Introductory Engineering Team Design Project ',
              'description' => 'The introductory team design project introduces students to teamwork, project management, engineering design for a complex problem, technical writing and technical presentation in a team environment. Students work in teams and each team designs and builds a prototype defined by the Department. Students present their design and demonstrate that their design works in a competition at the end of the term. The students are also introduced to the basic principles of mechanics including the description of translational motion, rotational motion, forces and moments, work and energy, and they build a mechanical prototype to which the electronics and software are then added. A significant team project is required in this course. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 301',
              'course_name' => 'Engineering Management Principles and Economics ',
              'description' => 'Introduction to project delivery systems. Principles of project management; role and activity of a manager; enterprise organizational charts; cost estimating; planning and control. Company finances; interest and time value of money; discounted cash flow; evaluation of projects in private and public sectors; depreciation methods; business tax regulations; decision tree; sensitivity analysis. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 308',
              'course_name' => 'Engineering Industrial Experience Reflective Learning III ',
              'description' => 'This course further expands on the students’ third industrial experience in their related field of study to further develop their knowledge and work-related skills.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 311',
              'course_name' => 'Transform Calculus and Partial Differential Equations ',
              'description' => 'Elements of complex variables. The Laplace transform: Laplace transforms and their properties, solution of linear differential equations with constant coefficients. Further theorems and their applications. The Fourier transform: orthogonal functions, expan­sion of a function in orthogonal functions, the Fourier series, the Fourier integral, the Fourier transform, the convolution theorem. Partial differential equations: physical foundations of partial differential equations, introduction to boundary value problems. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 361',
              'course_name' => 'Fluid Mechanics I ',
              'description' => 'Basic concepts and principles of fluid mechanics. Classification of fluid flow. Hydrostatic forces on plane and curved surfaces, buoyancy and stability, fluids in rigid body motion. Mass, momentum, and energy conservation integral equations. Bernoulli equation. Basic concepts of pipe and duct flow. Introduction to Navier-Stokes equations. Similarity and model studies. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 371',
              'course_name' => 'Probability and Statistics in Engineering ',
              'description' => 'Axioms of probability theory. Events. Conditional probability. Bayes theorem. Random variables. Mathematical expectation. Discrete and continuous probability density functions. Transformation of variables. Probabilistic models, statistics, and elements of hypothesis testing (sampling distributions and interval estimation). Introduction to statistical quality control. Applications to engineering problems. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 391',
              'course_name' => 'Numerical Methods in Engineering ',
              'description' => 'Roots of algebraic and transcendental equations; function approximation; numerical differentiation; numerical integration; solution of simultaneous algebraic equations; numerical integration of ordinary differential equations. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 392',
              'course_name' => 'Impact of Technology on Society ',
              'description' => 'Social history of technology and of science including the industrial revolution and modern times. Engineering and scientific creativity, social and environmental problems created by uncontrolled technology, appropriate technology. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 411',
              'course_name' => 'Special Technical Report ',
              'description' => 'Students must submit a report on a topic related to the students’ discipline and approved by the Department. The report must present a review of a current engineering problem, a proposal for a design project, or a current engineering practice.',
              'credits' => 1
            ],
            [
              'course_code' => 'ENGR 412',
              'course_name' => 'Honours Research Project ',
              'description' => 'Students work on a research project in their area of concentration, selected in consultation with and conducted under the supervision of a faculty member of the Department. The student’s work must culminate in a final report, as well as an oral presentation. Students planning to register for this course should consult with the Department prior to term of planned registration. Intended for students with potential interest in graduate programs.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENGR 472',
              'course_name' => 'Robot Manipulators ',
              'description' => 'Spatial descriptions and transformations. Manipulator forward and inverse kinematics. Jacobians: velocities and static forces. Manipulator dynamics. Trajectory generation. Position control of manipulators. Force control of manipulators. Robot programming languages. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ENGR 498',
              'course_name' => 'Topics in Engineering ',
              'description' => 'This course may be offered in a given year upon the authorization of the Faculty. The course content may vary from offering to offering.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 228',
              'course_name' => 'System Hardware ',
              'description' => 'Processor structure, Data and Instructions, Instruction Set Processor (ISP) level view of computer hardware, assembly language level use. Memory systems — RAM and disks, hierarchy of memories. I/O organization, I/O devices and their diversity, their interconnection to CPU and Memory. Communication between computers at the physical level. Networks and computers. Lectures: three hours per week. Tutorial: two hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'SOEN 287',
              'course_name' => 'Web Programming ',
              'description' => 'Internet architecture and protocols. Web applications through clients and servers. Markup languages. Client-side programming using scripting languages. Static website contents and dynamic page generation through server-side programming. Preserving state (client-side) in web applications. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 298',
              'course_name' => 'System Hardware Lab ',
              'description' => 'Digital design exercises including assembly and testing corresponding to the SOEN 228 lab. Laboratory: two hours per week.',
              'credits' => 1
            ],
            [
              'course_code' => 'SOEN 321',
              'course_name' => 'Information Systems Security ',
              'description' => 'Protocol layers and security protocols. Intranets and extranets. Mobile computing. Electronic commerce. Security architectures in open-network environments. Cryptographic security protocols. Threats, attacks, and vulnerabilities. Security services: confidentiality; authentication; integrity; access control; non-repudiation; and availability. Security mechanisms: encryption; data-integrity mechanisms; digital signatures; keyed hashes; access-control mechanisms; challenge-response authentication; traffic padding; routing control; and notarization. Key-management principles. Distributed and embedded firewalls. Security zones. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 331',
              'course_name' => 'Introduction to Formal Methods for Software Engineering ',
              'description' => 'Assertions. Static and dynamic checking. Method specification using preconditions and postconditions. Strengthening and weakening. Design by contract. Hoare logic. Invariants. Class specification using invariants. Software tools for assertion checking and verification. Reliable software development. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 341',
              'course_name' => 'Software Process ',
              'description' => 'Basic principles of software engineering. Introduction to software process models. Activities in each phase, including review activities. Working in teams: organization; stages of formation; roles; conflict resolution. Notations used in software documentation. How to review, revise, and improve software documentation. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 342',
              'course_name' => 'Software Requirements and Specifications ',
              'description' => 'Requirements engineering. Functional and non-functional requirements. Traceability. Test generation. Formal and informal specifications. Formal specification languages. Reasoning with specifications. Correctness issues. Verification. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 343',
              'course_name' => 'Software Architecture and Design I ',
              'description' => 'From requirements to design to implementation. Planned vs. evolutionary design and refactoring. Model-driven design and Unified Modelling Language (UML). Structural and behavioural design descriptions and specifications. General and domain-specific design principles, patterns and idioms. Object-oriented design concepts such as interfaces vs. abstract types, polymorphism, generics, and delegation vs. subclassing. Introduction to software architecture (styles and view models). Design quality. Design rationale. Design methodologies (e.g. based on responsibility assignment). Test-driven development. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 344',
              'course_name' => 'Software Architecture and Design II ',
              'description' => 'Architectural activities, roles, and deliverables. Architectural view models. Architectural styles (including client-server, layered, pipes-and-filters, event-based, process control) and frameworks. Architectural analysis and the interplay with requirements elicitation. Notations for expressing architectural designs, structural and behavioural specifications. From architectural design to detailed design. Domain specific architectures and design patterns. Evaluation and performance estimation of designs. Advanced object-oriented design patterns and idioms. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 345',
              'course_name' => 'Software Testing, Verification and Quality Assurance ',
              'description' => 'Testing strategies. Specification-based vs. code-based, black-box vs. white-box, functional vs. structural testing; unit, integration, system, acceptance, and regression testing. Verification vs. validation. Test planning, design and artifacts. Introduction to software reliability and quality assurance. Formal verification methods, oracles; static and dynamic program verification. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 357',
              'course_name' => 'User Interface Design ',
              'description' => 'The human side: I/O; memory; and information processing. Interaction: mental models; human error; interaction frameworks and paradigms. Direct manipulation. User interface design: principles; standards; and guidelines. User-centred design: standards and design rationale; heuristic evaluation; iterative design; and prototyping. Task-centred design. Rationalized design: usability engineering; dialogue notations; user models; diagrammatic notations; and textual notations. Evaluation: with the user; without the user; quantitative; and qualitative. Implementation support. Help and documentation. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 384',
              'course_name' => 'Management, Measurement and Quality Control ',
              'description' => 'Organization of large software development. Roles of team members, leaders, managers, stakeholders, and users. Tools for monitoring and controlling a schedule. Financial, organizational, human, and computational resources allocation and control. Project and quality reviews, inspections, and walkthroughs. Risk management. Communication and collaboration. Cause and effects of project failure. Project management via the Internet. Quality assurance and control. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 385',
              'course_name' => 'Control Systems and Applications ',
              'description' => 'Mathematical modelling of dynamical systems; block diagrams; feedback; open and closed loops. Linear differential equations; time domain analysis; free, forced, and total response; steady state and transient response. Laplace transform and inverse transform; second order systems. Transfer functions and stability. Control system design: PID and root locus techniques. Computer simulation of control systems. Applications. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 387',
              'course_name' => 'Web-Based Enterprise Application Design ',
              'description' => 'Hypertext Transfer Protocol (HTTP), web mark-up languages and encodings. Document Object Models (DOM). Client/server and layered architectures for Web-based Enterprise Applications (WEA). Presentation, Domain and Data Source design patterns. Client-side programming. Java servlets and Java Server Pages. Authentication, security and transaction processing. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 390',
              'course_name' => 'Software Engineering Team Design Project ',
              'description' => 'Students work in teams to design and implement a software project from requirements provided by the coordinator. Each team will demonstrate the software and prepare adequate documentation for it. In addition, each student will write an individual report. Lectures: two hours per week. Tutorial: one hour per week. Laboratory: three hours per week.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'SOEN 422',
              'course_name' => 'Embedded Systems and Software ',
              'description' => 'Characteristics of embedded systems. Microcontroller architectures and their software. Development environments. Operating system configuration. Interprocessor and remote communication. Interface, timer and interrupt configuration. Control of physical systems. Design, implementation and testing of integrated systems. Advanced topics. Lectures: three hours per week. Tutorial one hour per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'SOEN 423',
              'course_name' => 'Distributed Systems ',
              'description' => 'Principles of distributed computing: scalability, transparency, concurrency, consistency, fault tolerance, high availability. Client-server interaction technologies: interprocess communication, sockets, group communication, remote procedure call, remote method invocation, object request broker, CORBA, web services. Server design techniques: process replication, fault tolerance through passive replication, high availability through active replication, coordination and agreement, transactions and concurrency control. Lectures: three hours per week. Tutorial one hour per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'SOEN 448',
              'course_name' => 'Management of Evolving Systems ',
              'description' => 'Software maintenance: corrective; perfective; and adaptive. Software reuse; construction of reusable software. Techniques for reverse engineering and re-engineering software. Software development as “growing” software. Long-term evolution of software systems. Legacy systems. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 449',
              'course_name' => 'Component Engineering ',
              'description' => 'Review of high-level language concepts and abstraction mechanisms. Programming with functional and logical languages. Typed vs. untyped languages. The use of scripting languages and other language-based techniques to assemble systems from high-level components. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'SOEN 487',
              'course_name' => 'Web Services and Applications ',
              'description' => 'Analysis and design of web services and applications. Advanced architectures for the design, deployment, and testing of large multi-server web services and applications. Service Oriented Architecture (SOA). Electronic Commerce. Security. Load balancing. Stress testing. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'SOEN 490',
              'course_name' => 'Capstone Software Engineering Design Project ',
              'description' => 'Students work in teams of between six and nine members to construct a significant software application. The class meets at regular intervals. Team members will give a presentation of their contribution to the project. Lectures: one hour per week. Laboratory: two hours per week. Two terms.',
              'credits' => 4
            ],
            [
              'course_code' => 'SOEN 491',
              'course_name' => 'Software Engineering Project ',
              'description' => 'Theoretical or practical project in an advanced topic in software engineering.',
              'credits' => 1
            ],
            [
              'course_code' => 'SOEN 498',
              'course_name' => 'Topics in Software Engineering ',
              'description' => 'This course may be offered in a given year upon the authorization of the Department. The content may vary from offering to offering and will be chosen to complement the available elective courses. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 108',
              'course_name' => 'Computer Science Industrial Experience Reflective Learning I ',
              'description' => 'This course is a reflective learning module for students in their related field which is based on their academic requirements and their first industrial experience.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 201',
              'course_name' => 'Introduction to Computing ',
              'description' => 'Overview of computing systems. Problem solving and algorithms. Introduction to computer programming. Hardware, software and data storage, programming languages, data organization, program design and development. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 208',
              'course_name' => 'Computer Science Industrial Experience Reflective Learning II ',
              'description' => 'This course expands on the students’ second industrial experience term in their related field of study to further develop their knowledge and work-related skills.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 218',
              'course_name' => 'Fundamentals of Programming ',
              'description' => 'Computers and computing: problem solving with computers, basic data types, expressions, assignments, control structures, simple library functions, programmer-defined functions, arrays of basic types. Basic elements of object-oriented programming: classes, objects and methods. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 228',
              'course_name' => 'System Hardware ',
              'description' => 'Levels of system abstraction and von Neumann model. Basics of digital logic design. Data representation and manipulation. Instruction set architecture. Processor internals. Assembly language programming. Memory subsystem and cache management. I/O subsystem. Introduction to network organization and architecture. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 232',
              'course_name' => 'Mathematics for Computer Science ',
              'description' => 'Sets. Propositional logic and predicate calculus. Functions and relations. Elements of number theory. Proof techniques: direct proof, indirect proof, proof by contradiction, proof by induction. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 233',
              'course_name' => 'Probability and Statistics for Computer Science ',
              'description' => 'Combinatorics. Axioms of probability. Conditional probability. Discrete and continuous probability distributions. Expectation and moments. Hypothesis testing. Parameter estimation. Correlation and linear regression. Applications to computer science. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 248',
              'course_name' => 'Object-Oriented Programming I ',
              'description' => 'Introduction to programming. Basic data types, variables, expressions, assignments, control flow. Classes, objects, methods. Information hiding, public vs. private visibility, data abstraction and encapsulation. References. Arrays. Lectures: three hours per week. Tutorial: two hours per week. Laboratory: one hour per week.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'COMP 249',
              'course_name' => 'Object-Oriented Programming II ',
              'description' => 'Design of classes. Inheritance. Polymorphism. Static and dynamic binding. Abstract classes. Exception handling. File I/O. Recursion. Interfaces and inner classes. Graphical user interfaces. Generics. Collections and iterators. Lectures: three hours per week. Tutorial: two hours per week. Laboratory: one hour per week.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'COMP 318',
              'course_name' => 'Introduction to Database Applications ',
              'description' => 'This is a hands-on course on database technology intended for non-computer science students in engineering, science, business, or arts. It emphasizes practical issues in application development while introducing the fundamentals of databases with a focus on the relational data model and the Structured Query Language (SQL). Upon completion of this course, students will be able to design and implement databases, and develop user interfaces to access, search, and update the database through the Internet using the web technology. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 326',
              'course_name' => 'Computer Architecture ',
              'description' => 'Computer architecture models: control-flow and data-flow. Concurrency and locality, data dependency theory. Instruction level parallelism. Instruction scheduling. Pipelined processors. Vector processors. Thread level parallelism. Multiprocessors. Shared memory models. Coherence protocols. Interconnection networks. Performance issues. Advanced topics in contemporary computer architectures. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 335',
              'course_name' => 'Introduction to Theoretical Computer Science ',
              'description' => 'Finite state automata and regular languages. Push-down automata and context-free languages. Pumping lemmas. Applications to parsing. Turing machines. Unde­cidability and decidability. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 339',
              'course_name' => 'Combinatorics ',
              'description' => 'General principles of counting, permutations, combinations, identities, partitions, generating functions, Fibonacci numbers, Stirling numbers, Catalan numbers, principle of inclusion-exclusion. Graphs, subgraphs, isomorphism, Euler graphs, Hamilton paths and cycles, planar graphs, Kuratowski’s Theorem, trees, colouring, 5-colour theorem, matching, Hall’s theorem.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 345',
              'course_name' => 'Advanced Program Design with C++ ',
              'description' => 'Introduction to C++. I/O with stream classes. Pointers and their uses. The Standard Template Library (STL): containers, algorithms, iterators, adaptors, function objects. Class design: constructors, destructors, operator overloading, inheritance, virtual functions, exception handling, memory management. Advanced topics: libraries, locales, STL conventions, concurrency, template metaprogramming. Applications of C++: systems, engineering, games programming. Project. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 346',
              'course_name' => 'Operating Systems ',
              'description' => 'Fundamentals of operating system functionalities, design and implementation. Multiprogramming: processes and threads, context switching, queuing models and scheduling. Interprocess communication and synchronization. Principles of concurrency. Synchronization primitives. Deadlock detection and recovery, prevention and avoidance schemes. Memory management. Device management. File systems. Protection models and schemes. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 348',
              'course_name' => 'Principles of Programming Languages ',
              'description' => 'Survey of programming paradigms: Imperative, functional, and logic programming. Issues in the design and implementation of programming languages. Declaration models: binding, visibility, and scope. Type systems, including static and dynamic typing. Parameter passing mechanisms. Hybrid language design. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 352',
              'course_name' => 'Data Structures and Algorithms ',
              'description' => 'Abstract data types: stacks and queues, trees, priority queues, dictionaries. Data structures: arrays, linked lists, heaps, hash tables, search trees. Design and analysis of algorithms: asymptotic notation, recursive algorithms, searching and sorting, tree traversal, graph algorithms. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 353',
              'course_name' => 'Databases ',
              'description' => 'Introduction to database management systems. Conceptual database design: the entity-relationship model. The relational data model and relational algebra: functional dependencies and normalization. The SQL language and its application in defining, querying, and updating databases; integrity constraints; triggers. Developing database applications. Other data models: Datalog. Object-oriented data model and ODL. Semi-structured data. Project. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 354',
              'course_name' => 'Introduction to Software Engineering ',
              'description' => 'Software development process models (e.g. linear vs. iterative). Project management; roles, activities and deliverables for each software life cycle phase. Requirements management: analysis, elicitation, and scope. Architecture, design and the mapping of requirements to design and design to implementation. Traceability. Software quality assurance: verification, validation and the role of testing. Maintenance and evolution. Project. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 361',
              'course_name' => 'Elementary Numerical Methods ',
              'description' => 'Vector and matrix norms. Numerical methods for solving linear systems, Gaussian elimination, LU decomposition, error analysis. Numerical solution of nonlinear equations, Newton’s method, fixed point iterations. Interpolation and approximation, Taylor, Lagrange, Chebyshev and Legendre polynomials. Cubic spline interpolation. Numerical differentiation, numerical integration, Gauss quadrature. Discrete least-squares approximation. Initial value problems in ordinary differential equations, stiff differential equations. Boundary value problems in ordinary differential equations. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 367',
              'course_name' => 'Techniques in Symbolic Computation ',
              'description' => 'Symbolic computation and its use in pure and applied mathematics, in particular in algebra, number theory, cryptography, coding theory, and combinatorics. Programming in a symbolic computing system (e.g. MAPLE).',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 371',
              'course_name' => 'Computer Graphics ',
              'description' => 'Introduction to computer graphics and graphics hardware. Introduction to graphics API and graphics systems architecture. Mathematics of 2D and 3D transformations, and 2D and 3D viewing. Colour and basic rendering algorithms. Visual realism and visibility. Illumination and shading, global illumination techniques, and textures. Introduction to curves and surfaces, and 3D object modelling. Introduction to computer animation. Project. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 376',
              'course_name' => 'Introduction to Game Development ',
              'description' => 'Introduction to design and implementation aspects of computer gaming: basic game design, storytelling and narratives, and game genres. Virtual environments, 2D and 3D game engines, and game development tools. Character development, gameplay strategies, level design in games, and user interfaces. Architecture of game consoles, analog and digital controllers, and the incorporation of graphics, sound, and music in game implementations. Project. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 426',
              'course_name' => 'Multicore Programming ',
              'description' => 'Fundamental concepts of computer architecture. Architecture of the selected multicore platform. Review of shared-memory parallel programming. The difficulties inherent to parallel programming. Scalability of programming models. The stream programming model for multicore. Implicit and explicit threading. Implicit and explicit orchestration of data movement, both on chip and off. Adapting standard algorithms to multicore. Critical assessment of the available system-software support. Project. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 428',
              'course_name' => 'Parallel Programming ',
              'description' => 'Parallel programming techniques as a natural extension to sequential programming. Overview of parallel programming architectures and models. Parallel programming issues: locality, granularity, scheduling, data decomposition and distribution, load balancing, communication and synchronization, determinacy and non-determinacy, cost and performance. Techniques and tools for message-passing parallel programming. Case studies. Project. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 442',
              'course_name' => 'Compiler Design ',
              'description' => 'Compiler organization and implementation: lexical analysis and parsing, syntax-directed translation, code optimization. Run-time systems. Project. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 444',
              'course_name' => 'System Software Design ',
              'description' => 'Detailed examination of the design, implementation and system call interface of a contemporary operating system: its kernel, file system, process and thread management including scheduling, file system design and implementation, memory management, device management, I/O management, interprocess communication and synchronization mechanisms, system call interface, interrupt handling, and other advanced issues. Project. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 445',
              'course_name' => 'Data Communication and Computer Networks ',
              'description' => 'Network architectures: OSI and Internet models. Link layer: error detection, multiple access protocols, addressing. Local area networks: Ethernet, ATM, switches and hubs. Network layer: forwarding and routing, IP, routing algorithms, multicast. Transport layer: connectionless and connection-oriented transport, reliable data transport, congestion control, QoS, UDP and TCP. Application layer: DNS, the web and http, file transfer, and email. Introduction to network security, multimedia protocols and wireless networking. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 451',
              'course_name' => 'Database Design ',
              'description' => 'Storage management. Buffer management. Data organization. Index structures. Query optimization and execution. Transaction management. Recovery. Concur­rency control. Database performance analysis and tuning. New trends in database technology. Project. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 465',
              'course_name' => 'Design and Analysis of Algorithms ',
              'description' => 'Order statistics: worst-case, average-case and amortized analysis. Algorithm design techniques: greedy algorithms, dynamic programming. Selected algorithms from graph theory, linear programming, number theory, string matching, and computational geometry. A survey of hard problems, NP-completeness, and approximation algorithms. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 472',
              'course_name' => 'Artificial Intelligence ',
              'description' => 'Scope of AI. First-order logic. Automated reasoning. Search and heuristic search. Game-playing. Planning. Knowledge representation. Probabilistic reasoning. Introduction to machine learning. Introduction to natural language processing. Project. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 473',
              'course_name' => 'Pattern Recognition ',
              'description' => 'Preprocessing. Feature extraction and selection. Similarity between patterns and distance measurements. Syntactic and statistical approaches. Clustering analysis. Bayesian decision theory and discriminant functions. Neural networks and machine learning. Applications. Project. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 474',
              'course_name' => 'Intelligent Systems ',
              'description' => 'Rule-based expert systems, blackboard architecture, and agent-based. Knowledge acquisition and representation. Uncertainty and conflict resolution. Reasoning and explanation. Design of intelligent systems. Project. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 476',
              'course_name' => 'Advanced Game Development ',
              'description' => 'Introduction to advanced aspects of computer games. Game engine design. Artificial Intelligence (AI): non-player character movement, coordinated movement, pathfinding, world representations; decision making; tactical AI, strategic AI, learning in games. Physics-based techniques: collision detection and response. Networked gaming: multi-player games, networking and distributed game design, mobile gaming. Improving realism: cut scenes, 3D sound. Project. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 477',
              'course_name' => 'Animation for Computer Games ',
              'description' => 'Introduction to the algorithms, data structures, and techniques used in modelling and rendering dynamic scenes. Topics include principles of traditional animation, production pipeline, animation hardware and software, orientation representation and interpolation, modelling physical and articulated objects, forward and inverse kinematics, motion control and capture, key-frame, procedural, and behavioural animation, camera animation, scripting system, and free-form deformation. Project. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 478',
              'course_name' => 'Image Processing ',
              'description' => 'Digital image fundamentals, image transforms (Fourier, Walsh, Haar, Hotelling, wavelet), image enhancement (histogram processing, spatial filtering, high- and low-pass filtering), image restoration, image compression (elements of information theory, image compression models, error-free compression, lossy compression, image compression standards), image segmentation (line detection, Hough transform, edge detection and linking, thresholding, region splitting and merging), representation and description (chain codes, signatures, skeletons, shape descriptors, moments, texture). Project. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 479',
              'course_name' => 'Information Retrieval and Web Search ',
              'description' => 'Basics of information retrieval (IR): boolean, vector space and probabilistic models. Tokenization and creation of inverted files. Weighting schemes. Evaluation of IR systems: precision, recall, F-measure. Relevance feedback and query expansion. Application of IR to web search engines: XML, link analysis, PageRank algorithm. Text categorization and clustering techniques as used in spam filtering. Project. Lectures: three hours per week. Laboratory: two hours per week.',
              'credits' => 4
            ],
            [
              'course_code' => 'COMP 490',
              'course_name' => 'Computer Science Project I ',
              'description' => 'Students work on a computer science project under the supervision of a faculty member and submit a suitable written report on the work carried out. Students planning to register for this course should consult with the Department prior to registration in the final year of study.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 492',
              'course_name' => 'Computer Science Project II ',
              'description' => 'Students work on a computer science project under the supervision of a faculty member and submit a suitable written report on the work carried out. Students planning to register for this course should consult with the Department prior to registration in their final year of study.',
              'credits' => 3
            ],
            [
              'course_code' => 'COMP 495',
              'course_name' => 'Honours Seminar ',
              'description' => 'Students are required to attend a number of departmental seminars and submit a written report on them.',
              'credits' => 1
            ],
            [
              'course_code' => 'COMP 498',
              'course_name' => 'Topics in Computer Science ',
              'description' => 'This course may be offered in a given year upon the authorization of the Department. The content may vary from offering to offering and will be chosen to complement the available elective courses. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENCS 272',
              'course_name' => 'Composition and Argumentation for Engineers ',
              'description' => 'Fundamentals of English composition and argumentation: grammar; reasoning and persuasion; persuasive proofs; argumentation; structuring and outlining; the problem statement; the body; and the conclusions. Language and persuasion for effective communication in professional engineering. Cultivation of a writing style firmly based on clear and critical thinking skills. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENCS 282',
              'course_name' => 'Technical Writing and Communication ',
              'description' => 'Technical writing form and style. Technical and scientific papers, abstracts, reports. Library research and referencing methods for engineers and computer scientists. Technical communication using information technology: document processing software, computer-assisted presentation, analysis and design of web presentation, choice and use of appropriate tools. Students will prepare an individual major report and make an oral presentation. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENCS 393',
              'course_name' => 'Social and Ethical Dimensions of Information and Communication Technologies ',
              'description' => 'Ethics in an information society; surveillance and privacy; economic globalization and intellectual property in a digital world: the digital divide; computer-based profiling and hacking; electronic democracy; computer-mediated experience; and information productivity and the work/life balance. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENCS 483',
              'course_name' => 'Creativity, Innovation and Critical Thinking in Science and Technology ',
              'description' => 'Understanding, thinking, arguing, and creativity in science and technology; analyzing and critiquing complex problems using multidisciplinary theories of creativity; exploring the processes of invention and innovation and their impact on economics, popular media, and social and cultural structures; case studies of why some inventions fail and others succeed. Students will be evaluated on case studies, assignments, and a project. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENCS 484',
              'course_name' => 'Development and Global Engineering ',
              'description' => 'International development and global engineering: globalization; development projects; planning and analysis; and participatory data gathering. A project. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ENCS 498',
              'course_name' => 'Topics in Engineering and Computer Science ',
              'description' => 'This course may be offered in a given year upon the authorization of the Faculty. The course content may vary from offering to offering.',
              'credits' => 3
            ],
            [
              'course_code' => 'COEN 212',
              'course_name' => 'Digital Systems Design I ',
              'description' => 'Modulo arithmetic: representations of numbers in binary, octal and hexadecimal formats; binary arithmetic. Boolean algebra; theorems and properties, functions, canonical and standard forms. Logic gates and their use in the realization of Boolean algebra statements; logic minimization, multiple output circuits. Designing with MSI and LSI chips, decoders, multi­plexers, adders, multipliers, programmable logic devices. Introduction to sequential circuits; flip-flops. Completely specified sequential machines. Machine equivalence and minimization. Implementation of clock mode sequential circuits. Lectures: three hours per week. Tutorial: two hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'COEN 231',
              'course_name' => 'Introduction to Discrete Mathematics ',
              'description' => 'Fundamentals of logic: basic connectives and truth tables; logical equivalence; the laws of logic; logical implication; rules of inference; the use of quantifiers; proofs of theorems. Sets: the laws of set theory. Boolean algebra. Relation of Boolean algebra to logical and set theoretic operations. Modulo arithmetic: division algorithm. Induction and recursion: induction on natural numbers; recursive definitions. Functions and relations: cartesian products and relations; functions; function composition and inverse functions; equivalence relations. Elements of graph theory: basic definitions of graph theory; paths, reachability and connectedness; computing paths from their matrix representation; traversing graphs represented as adjacency lists; trees and spanning trees. Finite-state machines (FSM) deterministic and nondeterministic machines; regular languages; FSM with output; composition of FSM. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COEN 243',
              'course_name' => 'Programming Methodology I ',
              'description' => 'Introduction to computer hardware and software, programming and programming paradigms; including low-level programming. Boolean algebra: operators, expressions and truth tables. Overview of procedural programming languages: key elements; reserved words and identifiers; data types and declarations; statements; arithmetic expressions; different modes of execution. Top-down modular design using functions (and native classes). Flow control using If-Else and Switch statements. Repetition using loops and recursive functions. Simple data types: native and user-defined. Static data structures: arrays and structures. Overview of object-oriented programming languages. User-defined classes. Class attributes and methods. Object creation, use and destruction. Pointers and an introduction to dynamic data structures. Introduction to streams and files. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COEN 244',
              'course_name' => 'Programming Methodology II ',
              'description' => 'Review of object-oriented programming and further concepts. More on classes. Revisiting pointers. Operator overloading: regular and advanced usage. Fundamentals of file and stream processing. Class composition and inheritance: regular and advanced usage. Virtual functions. Polymorphism. Static and dynamic binding. Abstract classes. Case study of a small-scale object-oriented project: simplified analysis, design, and implementation. Introduction to templates, the standard template library, and exception handling. Introduction to dynamic data types. Namespaces. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COEN 311',
              'course_name' => 'Computer Organization and Software ',
              'description' => 'Introduction and terminology. Review of data representation and arithmetic. Floating-point representation and arithmetic. Functional units: CPU, memory, I/O, computer operation. Machine programming fundamentals: instruction structure, addressing modes, the assembly process, examples of architectures. Case study of a microprocessor architecture: programming model, assembler and addressing modes, instruction set and formats; programming examples. Stacks, subroutines, macros, exceptions, interrupts. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'COEN 313',
              'course_name' => 'Digital Systems Design II ',
              'description' => 'Two-level and multi-level logic optimization techniques. Hardware description languages (VHDL) for synthesis and simulation. Asynchronous design. Algorithmic state machines. Clocking and clock skew. Metastability. Self-timed concepts. Finite state machine (FSM) optimization. State reduction. FSM partitioning. Programmable logic devices and field programmable gate arrays. Data path and control design for processors. Testing issues. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'COEN 315',
              'course_name' => 'Digital Electronics ',
              'description' => 'Analysis and simulation of basic digital circuit blocks, in particular, CMOS, BiCMOS and ECL technologies. The focus is on the electronics aspect of digital circuits. Combinational and sequential circuit units, including logic gates, flip-flops, signal generators, static and dynamic memories, and interconnections. Performance analysis in terms of switching speeds, power dissipation, noise immunity, fan-in and fan-out. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'COEN 316',
              'course_name' => 'Computer Architecture and Design ',
              'description' => 'Review of basic computer architecture designs. Fundamentals of computer design and performance. Cost issues. Instruction set design principles. Memory hierarchies: registers, caches, and virtual memories. Basic processor implementation issues. High performance computing issues such as pipelining, superscalar, and vector processing. Input/output subsystem designs. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'COEN 317',
              'course_name' => 'Microprocessor Systems ',
              'description' => 'Introduction to microprocessor interfacing. Bus functions, bus interconnections, synchronous and asynchronous bus. Signal flow and data transfer, decoding for I/O and memory, memory organization and structures. Interfacing examples; parallel interfacing, serial interfacing, the interrupt system; bus arbitration and DMA. Analog-to-digital and digital-to-analog structures and interfacing. Custom hardware units and multi-core systems. Benchmarking and comparative study of recent microprocessor systems. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'COEN 320',
              'course_name' => 'Introduction to Real-Time Systems ',
              'description' => 'Fundamentals of real-time systems: definitions, requirements, design issues and applications. Real-time operating systems (RTOS) feature: multi-tasking, process management, scheduling, interprocess communication and synchronization, real-time memory management, clocks and timers, interrupt and exception handling, message queues, asynchronous input/output. Concurrent programming languages: design issues and examples, POSIX threads and semaphores. Introduction to real-time uniprocessor scheduling policies: static vs. dynamic, pre-emptive vs. non-pre-emptive, specific techniques — rate-monotonic algorithm, earliest-deadline-first, deadline monotonic, least-laxity-time-first; clock-driven scheduling. Design and specification techniques — Finite state machine based State-chart, Dataflow diagram, Petri nets. Reliability and fault-tolerance. Case studies of RTOS — QNX, VxWorks, and research prototypes. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COEN 345',
              'course_name' => 'Software Testing and Validation ',
              'description' => 'Overview of the three phases and deliverables of a project. Validation vs. verification, reviews, walkthrough. Testing: acceptance testing, integration testing, module testing. Writing stubs. Performance testing. Role of formal methods. Code inspection. Defect tracking. Causality analysis. Software Metrics and quality management. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'COEN 346',
              'course_name' => 'Operating Systems ',
              'description' => 'The evolution, architecture, and use of modern operating systems (OS). Multi-tasking, concurrency and synchronization, IPC, deadlock, resource allocation, scheduling, multi-threaded programming, memory and storage managements, file systems, I/O techniques, buffering, protection and security, the client/server paradigm and communications. Introduction to real time operating systems. Students write substantial programs dealing with concurrency and synchronization in a multi-tasking environment. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'COEN 352',
              'course_name' => 'Data Structures and Algorithms ',
              'description' => 'Mathematical introduction: mathematical induction, program analysis, and algorithm complexity. Fundamental data structures: lists, stacks, queues, and trees. Fundamental algorithms: hashing and sorting. Graph structures and algorithms. Overview of algorithm design techniques, including greedy algorithms, divide and conquer strategies, recursive and backtracking algorithms, and heuristics. Application of data structures and algorithms to engineering. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COEN 390',
              'course_name' => 'Computer Engineering Product Design Project ',
              'description' => 'The Product Design Project reinforces skills introduced in ENGR 290, which include teamwork, project management, engineering design for a complex problem, technical writing, and technical presentation in a team environment. It also introduces students to product development. Students are assigned to teams and each team develops, defines, designs and builds a system and/or device under broad constraints set by the Department. Students present their product definition and design, and demonstrate that their system/device works at the end of the term. Tutorial: two hours per week. Equivalent laboratory time: six hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COEN 413',
              'course_name' => 'Hardware Functional Verification ',
              'description' => 'Review of hardware design languages. Introduction to functional verification. Design for verification. Writing test benches, simulation engines, and coverage metrics. Introduction to verification languages. Verification plan: strategies, test cases, test benches. Modelling verification environments. Modelling input relations, intervals, events. Introduction to formal verification tools. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COEN 421',
              'course_name' => 'Embedded Systems and Software Design ',
              'description' => 'Introduction to real-time modelling languages. Introduction to embedded systems design using a unified view of software and hardware. Processor technologies: general purpose, single purpose, application-specific. Memory. Interfacing. Design technologies: hardware-software co-design/co-synthesis/co-simulation. Real-time debugging and monitoring techniques. Real-time communication protocols. Introduction to clock synchronization and group communication techniques. A multi-component project provides a hands-on experience in designing, implementing, and testing a real-time embedded system. Lectures: three hours per week. Laboratory: 30 hours total.',
              'credits' => 4
            ],
            [
              'course_code' => 'COEN 432',
              'course_name' => 'Applied Genetic and Evolutionary Systems ',
              'description' => 'Motivation for the use of Genetic Algorithms (GAs). Theory: the Schema Theorem, the K-armed Bandit, the Building Block Hypothesis, the Idealized GA and comparison of GAs. Methodology: representation, fitness and selection, crossover and mutation, parameterization and constraints, implementation. Applications: function optimization, evolving computer programs, optimizing a pattern recognizer, system modelling. Identification of classes of problems suitable for the use of GAs. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'COEN 445',
              'course_name' => 'Communication Networks and Protocols ',
              'description' => 'Network topologies. Communications protocols basics. Local Area Networks (LANs). Wide Area Networks (WANs). Layered architecture standards (OSI and TCP/IP) and protocols. Internetworking. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'COEN 451',
              'course_name' => 'VLSI Circuit Design ',
              'description' => 'Analysis and design of electronic circuits using Very Large Scale Integration (VLSI) technologies. Physical design of MOS digital circuits. CMOS circuit schematic and layout. CMOS processing technology, design rules and CAD issues. Physical layers and parasitic elements of CMOS circuits. Characterization and performance evaluation. Constraints on speed, power dissipation and silicon space consumption. Design and implementation of CMOS logic structures, interconnections and I/O structures. Circuit design project using a specified CMOS technology. Lectures: three hours per week. Laboratory: 30 hours total.',
              'credits' => 4
            ],
            [
              'course_code' => 'COEN 490',
              'course_name' => 'Capstone Computer Engineering Design Project ',
              'description' => 'Students are assigned to groups, and work together under faculty supervision to solve a complex interdisciplinary design problem — typically involving communications, control systems, electromagnetics, power electronics, software design, and/or hardware design. The project fosters teamwork between group members and allows students to develop their project management, technical writing, and technical presentation skills. Tutorial: one hour per week, two terms. Equivalent laboratory time: four hours per week, two terms.',
              'credits' => 4
            ],
            [
              'course_code' => 'COEN 498',
              'course_name' => 'Topics in Computer Engineering ',
              'description' => 'The course, when offered, will include topics which complement elective courses in computer engineering and computer science. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 242',
              'course_name' => 'Continuous-Time Signals and Systems ',
              'description' => 'Continuous-time signals. Properties of continuous-time systems. Linear Time Invariant (LTI) systems. Impulse response and convolution. Systems based on linear constant-coefficient differential equations. Fourier series representation of periodic signals. The Fourier transform representation of signals and systems. Inverse Fourier transform. Laplace Transform. Inverse Laplace Transform. Unilateral Laplace Transform. Natural and forced responses of linear differential equations. Transfer function and block diagram representation of LTI systems. Time and frequency domain characteristics of ideal and non-ideal filters. Amplitude modulation and demodulation. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 251',
              'course_name' => 'Fundamentals of Applied Electromagnetics ',
              'description' => 'Electric charge, Coulomb’s law, electrostatic forces, electric field, Gauss’ law, electric potential, stored energy. Dielectrics, properties of materials in electric fields. Electric current, conduction in a vacuum and in material media, displacement current, magnetic field of a current, force on a current-carrying wire, magnetic induction, electromotive force, energy stored in a magnetic field. Magnetism in material media, magnetic circuits. Time-varying fields. Capacitance, resistance, inductance, elements of electric circuits. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 264',
              'course_name' => 'Signals and Systems I ',
              'description' => 'Continuous-time and discrete-time signals and systems. Linear Time Invariant (LTI) systems. Convolution-sum and convolution-integral representation of systems. Causal LTI systems. Fourier series representation of continuous-time and discrete-time periodic signals. Filters described by differential or difference equations. The continuous-time Fourier transform. Systems based on linear constant-coefficient differential equations. The discrete-time Fourier transform. Systems based on linear constant-coefficient difference equations. Lectures: three hours per week. Tutorials: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 273',
              'course_name' => 'Basic Circuit Analysis ',
              'description' => 'Units: current, voltage, power, and energy. Elementary wave-forms. Time averages. Ohm’s law. KVL and KCL. Ideal sources. Mesh and node analysis of resistive circuits. Network theorems. Inductors and capacitors and their response to the application of elementary waveforms. Transient response of simple circuits. Natural frequency and damping. Initial conditions. Steady state AC analysis: resonance, impedance, power factor. Introduction to three phase power, delta and Y connections. Ideal operational amplifiers. Ideal transformers. Lectures: three hours per week. Tutorial: two hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 275',
              'course_name' => 'Principles of Electrical Engineering ',
              'description' => 'Fundamentals of electric circuits: Kirchoff’s laws, voltage and current sources, Ohm’s law, series and parallel circuits. Nodal and mesh analysis of DC circuits. Superposition theorem, Thevenin and Norton Equivalents. Use of operational amplifiers. Transient analysis of simple RC, RL and RLC circuits. Steady state analysis: Phasors and impedances, power and power factor. Single and three phase circuits. Magnetic circuits and transformers. Power generation and distribution. Lectures: three hours per week. Tutorial: two hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 311',
              'course_name' => 'Electronics I ',
              'description' => 'Diodes: terminal characteristics of junction diodes; analysis of diode circuits; the small signal model and its application; operation in the reverse-breakdown region — Zener diodes; rectifiers, limiting and clamping circuits. Principle of signal amplification: small signal models; linearity; loading effects; cascaded amplifiers. MOSFETs: structure and physical operation; current-voltage characteristics; MOSFET as switch, DC analysis; biasing considerations; small signal analysis, models and parameters; three basic configurations: common gate, common source, common drain, or amplification. Overview of BJT circuits: structure and physical operation of BJT; DC analysis; biasing considerations: small signal analysis and parameters; basic configurations for amplification. PSPICE: laboratory pre-labs and extensive simulation exercises. Lectures: three hours per week. Tutorial: two hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 312',
              'course_name' => 'Electronics II ',
              'description' => 'Differential and multi-stage amplifiers: differential pair; differential gain; common-mode gain and common-mode rejection ratio (CMRR) current mirrors. High frequency models: s-domain analysis, transfer functions; common gate, common source, common drain configurations; common base, common emitter, common collector configurations; wide-band amplifiers. Feedback: general feedback structure; properties of negative feedback; the four basic feedback configurations; loop gain and stability problems. Power amplifiers: classification and output stages; class A, B, C, and AB amplifiers; biasing the class AB amplifier. Introduction to filters, tuned amplifiers, oscillators and mixers. PSPICE: Laboratory pre-labs and extensive simulation exercises. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 321',
              'course_name' => 'Introduction to Semiconductor Materials and Devices ',
              'description' => 'Fundamentals underlying optical and electronic devices. The structure and growth of crystals. The energy band model for elemental and compound semiconductors. Electronic and optical properties of semiconductors. Electroluminescence and photoluminescence. The semiconductor in equilibrium. Carrier transport and non-equilibrium phenomena. Introductions to junctions and devices. The laboratory demonstrates the basic electrical and optical properties of semiconductor materials. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 331',
              'course_name' => 'Fundamentals of Electrical Power Engineering ',
              'description' => 'Review of fundamentals of AC circuit analysis. Overview of power systems. Three-phase circuits: balanced three-phase circuits with star and delta connected loads, power measurements. Magnetic circuits. Transformers. Power conversion techniques: single phase AC/DC rectifiers, DC/DC choppers and DC/AC converters. DC machines: Operating principle, separately excited DC motor, torque speed characteristics and control methods using rectifiers and choppers. Induction machines: Theory of three-phase induction machines, equivalent circuit parameters, efficiency, torque speed characteristics and control methods using inverters. Overview of power distribution systems. Safety codes. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 342',
              'course_name' => 'Discrete-Time Signals and Systems ',
              'description' => 'Discrete vs. continuous-time signals. Properties of discrete-time systems. Linear Time Invariant (LTI) systems. Unit impulse response and convolution. Systems based on linear constant-coefficient difference equations. Discrete Fourier series. The Fourier transform representation of signals and systems. Inverse Fourier transform. Sampling of continuous-time signals. Reconstruction of a signal from its samples. Discrete-time processing of continuous-time signals. Quantization. The Z-Transform and inverse Z-Transform. Unilateral Z-Transform. Transfer function and block diagram representation of LTI systems. Basic structures for Finite-Impulse-Response and Infinite-Impulse-Response filters. Computer-based MATLAB simulation. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 351',
              'course_name' => 'Electromagnetic Waves and Guiding Structures ',
              'description' => 'Maxwell’s equations. Differential forms of the laws of electromagnetism. Boundary conditions. Power and energy. Uniform plane waves. Transmission line theory. Rectangular waveguides. Antennas. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 353',
              'course_name' => 'Transmission Lines, Waves and Signal Integrity ',
              'description' => 'Transmission lines and high-speed logic design. Intersymbol interference and eye patterns. Transmission line circuits in the frequency domain, rise time and bandwidth of digital signals. Maxwell’s equations, plane waves, and antennas. Wireless communications and indoor propagation. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 364',
              'course_name' => 'Signals and Systems II ',
              'description' => 'Sampling of continuous-time signals. Reconstruction of a signal from its samples using interpolation. Laplace Transform. Inverse Laplace Transform. Analysis of systems using Laplace Transform. Unilateral Laplace Transform. Continuous-time filters and their design. The Z-Transform and inverse Z-Transform. Analysis of systems using Z-Transform. Unilateral Z-Transform. Discrete-time filters and their design. Computer-based MATLAB simulation. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 365',
              'course_name' => 'Complex Variables and Partial Differential Equations ',
              'description' => 'Review of complex arithmetic. Analytic functions. Taylor and Laurent series. Residue theory. Fourier series. Partial differential equations. Applications to Laplace, heat, and wave equations. Bessel and Legendre functions. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 367',
              'course_name' => 'Introduction to Digital Communications ',
              'description' => 'Analog communications and frequency multiplexing; pulse-code-modulation and time multiplexing; additive white Gaussian noise; matched filter and correlator receiver; maximum likelihood receiver and error probability; intersymbol interference, pulse shaping filter; Signal Space Analysis; Union Bound on the probability of error; Pass-band communication Systems; coherent and non-coherent communication systems; linear block codes, syndrome-based decoding; coding vs. modulation. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 372',
              'course_name' => 'Fundamentals of Control Systems ',
              'description' => 'Mathematical models of control systems. Characteristics, performance, and stability of linear feedback control systems. Root-locus methods. Frequency response methods. Stability in the frequency domain. Design and compensation of feedback control systems. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 390',
              'course_name' => 'Electrical Engineering Product Design Project ',
              'description' => 'The Product Design Project reinforces skills introduced in ENGR 290, which include teamwork, project management, engineering design for a complex problem, technical writing, and technical presentation in a team environment. It also introduces students to product development. Students are assigned to teams and each team develops, defines, designs and builds a system and/or device under broad constraints set by the Department. Students present their product definition and design, and demonstrate that their system/device works at the end of the term. Tutorial: two hours per week. Equivalent laboratory time: six hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 421',
              'course_name' => 'Solid State Devices ',
              'description' => 'Junction theory (PN junctions, Schottky and ohmic contacts, hetero-junctions). Structures and characteristics of diodes, solar cells, bipolar transistors, and fundamentals of MOSFETs. Planar silicon junctions and transistors will be designed, fabricated and evaluated in the laboratory, includ­ing resistivity measurements, semiconductor cleaning, oxidation, diffusion, photolithography, etching, metallization, and comparison of design with experimental results. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 422',
              'course_name' => 'Design of Integrated Circuit Components ',
              'description' => 'Structures, characteristics and design of MOS capacitors and MOSFETs. FinFETs, SOI FETs, velocity-modulation transistors, and HFETs. Role of strain in operation of modern FETs. Planar MOS devices, including capacitors and MOSFETs will be designed, fabricated, and evaluated in the laboratory. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 423',
              'course_name' => 'Introduction to Analog VLSI ',
              'description' => 'CMOS transistor layout considerations, design rules, circuit extraction. MOSFET modelling, I-V equations, AC equivalent circuits for high-frequency operation, computer-based simulation. Analysis and design of small-scale integrated circuit building blocks including MOS switch, active resistor, current source, current mirror, voltage amplifiers, voltage-reference circuits, multipliers. Analysis and design of medium-scale integrated circuit building blocks including op-amps, fully-differential op-amp and common mode feedback circuits, transconductance amplifiers, transimpedance amplifiers, comparators. Noise analysis. Mismatch analysis and modelling, offset removal techniques. Analog VLSI system examples. Lectures: three hours per week. Laboratory: 30 hours total.',
              'credits' => 4
            ],
            [
              'course_code' => 'ELEC 424',
              'course_name' => 'VLSI Process Technology ',
              'description' => 'Introduction to basic VLSI technologies; crystal growth, thermal oxidation, diffusion, ion implantation, chemical vapour deposition, wet and dry etching, and lithography. Layout, yield, and VLSI process integration. The lab demonstrates a semiconductor device fabrication process. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 425',
              'course_name' => 'Optical Devices for High-Speed Communications ',
              'description' => 'Optical properties of semiconductors. Fundamental principles for understanding and applying optical fibre technology. Fundamental behaviour of the individual optical components and their interactions with other devices. Lasers, LEDs, optical fibres, light detectors, optical switches. Concepts of WDM and DWDM. Components required for WDM and DWDM. A comprehensive treatment of the underlying physics: noise and distortion in optical communications, light polarization, modulation and attenuation. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 430',
              'course_name' => 'Electrical Power Equipment ',
              'description' => 'Components of a transmission system. Transmission line; modelling and parameters. Transformers: equivalent circuits, losses, connections and protection. Breakers: operation and design. Compensation equipment: capacitors, inductors, series and shunt connections. Insulation coordination. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 431',
              'course_name' => 'Electrical Power Systems ',
              'description' => 'Inductance, capacitance, resistance of polyphase transmission lines; current and voltage relations of transmission lines; load flow studies; symmetrical and unsymmetrical faults; power system stability. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 432',
              'course_name' => 'Control of Electrical Power Conversion Systems ',
              'description' => 'Basic considerations and control requirements. Control system principles and structures. Controller characteristics and operation. Static power conversion systems. Electromechanical systems and electrical machine modelling. Control system design. Applications to electric motor drives and typical power conversion systems. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 433',
              'course_name' => 'Power Electronics ',
              'description' => 'Review of basic electrical concepts. Power electronic systems. Power semiconductor switches. AC controllers. Line frequency AC-DC converters: diodes and thyristor circuits. DC-DC converters. DC-AC converters. Utility applications: STATCOM and power electronic interfaces. Industrial and utility applications. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 434',
              'course_name' => 'Behaviour of Power Systems ',
              'description' => 'Introduction: classification of phenomena, structure of power systems. Review of component models: lines, transformers, electrical machines and load. Excitation systems of machines. Steady-state operation. Transient stability, voltage stability and small signal stability. Compensation methods: stabilizer, series and shunt compensators. Sub-synchronous resonances. Transient electromagnetic phenomena. Methods and tools for numerical simulation. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 435',
              'course_name' => 'Electromechanical Energy Conversion Systems ',
              'description' => 'Lumped parameter concepts of electromechanics. Energy, co-energy in the derivation of torques and forces. Examples of electric machines: dc, synchronous and induction types. Steady-state, transient and stability analysis. Power electronic controllers. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 436',
              'course_name' => 'Protection of Power Systems ',
              'description' => 'General aspects of protection systems. Measurement transformers. Grounding. Overcurrent and ground fault protection. Protection of transformers, shunt capacitors and buses. Protection of transmission lines. Telecommunication for protection and automation systems. Protection of inverters. Protection of distribution networks. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 437',
              'course_name' => 'Renewable Energy Systems ',
              'description' => 'Electrical basics and models of solar energy (photo-voltaics), electrical power from wind energy, electrical power from water, including wave energy, tidal energy, micro-hydro. Case studies, for example the application of solar PV to street lighting. Electrical engineering design implications. Design assignments. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 438',
              'course_name' => 'Industrial Electrical Systems ',
              'description' => 'Structures of industrial power systems. Voltage levels. Electric installations, codes and standards. Short-circuits, protection and coordination. Grounding. Power quality. Power factor, tariffs and energy management. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 439',
              'course_name' => 'Hybrid Electric Vehicle Power System Design and Control ',
              'description' => 'Introduction to Electric Vehicles (EV), Hybrid Electric Vehicles (HEV). Vehicle design fundamentals. Traction motors for EV/HEV propulsion. On-board energy sources and storage devices: high-voltage traction batteries, fuel cells, ultra-capacitors, flywheels. Power electronic converters and control. Various EV/HEV/Fuel Cell Vehicle topologies and modelling. Energy management strategies. Practical design considerations. Engineering impact of electric, hybrid electric, and fuel cell vehicles. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 440',
              'course_name' => 'Controlled Electric Drives ',
              'description' => 'Elements of a drive system, characteristics of common mechanical systems, drive characteristics, operation in one, two, or four quadrants. Fully controlled rectifier drives, braking of DC motors, control of DC motors using DC/DC converters. Control of polyphase induction motors, voltage-source and current-source inverter drives, frequency-controlled induction motor drives, introduction to vector control of induction motor drives, field oriented control, sensor-less operation. Control of synchronous motors, permanent magnet motors. Switched reluctance motor drives, stepper motors. Brushless DC motor drives, low-power electronic motor drives. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 441',
              'course_name' => 'Modern Analog Filter Design ',
              'description' => 'Review of network analysis. Magnitude and frequency scaling. Magnitude and phase approximation in synthesis of filter functions. Second-order active RC filters. Synthesis of all-pole LC ladder filters. Second-order switched-capacitor filters. Realization of high-order active filters. Current mode filters. Switched-current filters. Integrated circuit filters. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 442',
              'course_name' => 'Digital Signal Processing ',
              'description' => 'Review of Z-transform; linear phase and non-linear phase systems; all-pass and minimum phase systems, recursive and non-recursive digital filters; common digital filter structures, common design approaches for digital filters; description of typical Digital Signal Processor chips; Review of sampling, reconstruction, interpolation and decimation; changing the sampling rate by integer and non-integer factor; multirate signal processing, polyphase decomposition, multirate filter banks; digital processing of analog signals, A/D and D/A converters; discrete Fourier transform; random signals, Least-Mean-Square (LMS) filters. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 453',
              'course_name' => 'Microwave Engineering ',
              'description' => 'Properties of waveguides, striplines, and microstrips. Scattering parameters. Butterworth and Chebyshev impedance transformers. Microwave couplers, cavities, and Fabry-Perot resonators. Periodic structures. Microwave filter design. Faraday rotation and non-reciprocal devices. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 455',
              'course_name' => 'Acoustics ',
              'description' => 'Sound generation and propagation in elastic media; conversion between acoustical, electrical, and mechanical energy. Lumped-parameter approximations, sound in rooms, underwater acoustics, microphones; loudspeakers and audio communications problems; noise and vibration control problems. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 456',
              'course_name' => 'Antennas ',
              'description' => 'Antenna fundamentals and definitions. Radiation integrals. Dipoles and loops. Arrays. Antenna self and mutual impedance. Matching techniques. Travelling wave antennas. Broadband antennas. Equivalence principle. Aperture antennas. Antenna measurement techniques. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 457',
              'course_name' => 'Design of Wireless RF Systems ',
              'description' => 'Introduction to wireless systems. Noise and distortion in microwave systems. Antennas and propagation. Amplifiers. Mixers. Transistor oscillators and frequency synthesizers. Modulation techniques. Receiver design. Use of RF CAD tools. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 458',
              'course_name' => 'Techniques in Electromagnetic Compatibility ',
              'description' => 'Introduction to EMC procedures, control plans, and specifications. Radiated and conducted susceptibility and emission testing. Introduction to EMC antennas, antenna concepts, electric and magnetic dipoles, biconical dipoles, conical log spiral antennas, setting up fields for susceptibility testing, measuring radiation from equipment. Coupled transmission lines, pulse propagation, closely spaced parallel transmission lines, capacitive coupling, inductive coupling, shielding against magnetic fields. Shielding and enclosures, electric and magnetic field screening mechanisms, shielding effectiveness, grounding considerations. EMC test facilities, screened rooms, TEM cells, signals and spectra, intermodulation, cross-modulation, the spectrum analyzer. Noise and pseudo-random noise, noise performance of measurement/receiving systems, noise equivalent bandwidth, noise figure, antenna noise temperature and S/N ratio. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 463',
              'course_name' => 'Telecommunication Networks ',
              'description' => 'Communication networks and services; introduction to layered network architectures; transmission systems and the telephone network: multiplexing, circuit switches, routing and signalling; peer-to-peer protocols: ARQ protocols, data-link controls, packet multiplexing; multiple access communications: Aloha, CSMA, reservation schemes, polling, token-passing ring, LAN standards, LAN bridges; packet-switching networks: datagrams and virtual circuits; TCP/IP architecture: Internet protocol, transmission control protocol. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 464',
              'course_name' => 'Wireless Communications ',
              'description' => 'Communications link analysis. Introduction to cellular systems: frequency reuse, trunking and grade of services, sectoring and cell splitting, coverage and capacity. Modulation techniques for mobile communications. Mobile radio channels. Spread-spectrum techniques. Multiplexing and multiple access techniques. Convolutional codes, Viterbi decoder; wireless standards from first generation to fourth generation; OFDM: an architecture for the fourth generation. Extensive communication system simulation exercises. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'ELEC 465',
              'course_name' => 'Networks Security and Management ',
              'description' => 'Network security threats. Importance of security policy. Principles and techniques of encryption and authentication. Network security protocols: X509, IPSEC (Internet Protocol Security Architecture). Network management: issues, architectures, and protocols. Fault management, configuration management, security management, performance management, and accounting management. Management Information Bases (MIBs). SNMP and its evolution. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 466',
              'course_name' => 'Introduction to Optical Communication Systems ',
              'description' => 'Overview of optical fibres and optical fibre com­munications. Signal propagation in optical fibres: attenuation, chromatic dispersion, mode coupling, and nonlinearities. Optical transmitters’ characteristics and requirements for optical networks. Power launching and coupling: optical transmitter-to-fibre coupling, fibre-to-fibre joints, and optical fibre connectors. Optical receivers: basic structures, noise analysis, characteristics and requirements for optical networks. Digital/analog transmissions: link power budget, rise-time budget, line coding, error correction, and noise effects on transmissions. WDM concepts: operation principle of WDM. Optical amplifiers: characteristics and requirements for optical networks, amplifier noise, system applications, and wavelength conversion. Optical networks: basic topologies, SONET/SDH, broadcast-and-select WDM networks, wavelength-routed networks. Optical measurements: test equipments, attenuation/dispersion measurements, OTDR, eye pattern and OSA. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 472',
              'course_name' => 'Advanced Telecommunication Networks ',
              'description' => 'Routing in packet networks, shortest-path algorithms, Internet routing protocols, ATM networks: ATM and ATM adaptation layers, traffic management and QoS, congestion control, ATM signalling, advanced network architectures: classical IP over ATM, MPLS, integrated and differentiated services, mobile communications: wireless transmission, medium access control, GSM system, mobile IP, mobile transport layer and support for mobility. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 481',
              'course_name' => 'Linear Systems ',
              'description' => 'Review of matrix algebra. State-space description of dynamic systems: linearity, causality, time-invariance, linearization. Solution of state-space equations. Transfer function representation. Discrete-time models. Controllability and observability. Canonical forms and minimal-order realizations. Stability. Stabilizability and pole placement. Linear quadratic optimal control. Observer design. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 482',
              'course_name' => 'System Optimization ',
              'description' => 'Linear least squares. Properties of quadratic functions with applications to steepest descent method, Newton’s method and Quasi-Newton methods for nonlinear optimization. One-dimensional optimization. Introduction to constrained optimization, including the elements of Kuhn-Tucker conditions for optimality. Least pth and mini-max optimization. Application of optimization techniques to engineering problems. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 483',
              'course_name' => 'Real-Time Computer Control Systems ',
              'description' => 'Introduction to real-time computer control systems; a review of discrete-time signals and systems, difference equations, z-transform; sampled-data systems, sample and hold, discrete models; discrete equivalents of continuous-time systems; stability analysis; design specifications; design using root locus and frequency response methods; implementation issues including bumpless transfer, integral windup, sample rate selection, pre-filtering, quantization effects and computational delay; scheduling theory and priority assignment to control processes, timing of control loops, effects of missed deadlines; principles and characteristics of sensors and devices, embedded processors, processor/device interface. Lectures: three hours per week. Laboratory: 15 hours total.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'ELEC 490',
              'course_name' => 'Capstone Electrical Engineering Design Project ',
              'description' => 'Students are assigned to groups, and work together under faculty supervision to solve a complex interdisciplinary design problem — typically involving communications, control systems, electromagnetics, power electronics, software design, and/or hardware design. The project fosters teamwork between group members and allows students to develop their project management, technical writing, and technical presentation skills. Tutorial: one hour per week, two terms. Equivalent laboratory time: four hours per week, two terms.',
              'credits' => 4
            ],
            [
              'course_code' => 'ELEC 498',
              'course_name' => 'Topics in Electrical Engineering ',
              'description' => 'This course may be offered in a given year upon the authorization of the Electrical and Computer Engineering Department. The course content may vary from offering to offering and will be chosen to complement elective courses available in a given year.',
              'credits' => 3
            ],
            [
              'course_code' => 'MECH 211',
              'course_name' => 'Mechanical Engineering Drawing ',
              'description' => 'Introduction to graphic language and design — means and techniques. The third and the first angle projections. Orthographic projection of points, lines, planes and solids. Principal and auxiliary views. Views in a given direction. Sectional views. Intersection of lines, planes and solids. Development of surfaces. Drafting practices. Dimensioning, fits and tolerancing. Computer-aided drawing and solid modelling. Working drawings — detail and assembly drawing. Design practice. Machine elements representation. Lectures: three hours per week. Tutorial: two hours per week — includes learning of a CAD software. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 215',
              'course_name' => 'Programming for Mechanical and Industrial Engineers ',
              'description' => 'Writing programs using assignment and sequences. Variables and types. Operators and expressions. Conditional and repetitive statements. Input and output. File access. Functions. Program structure and organization. Pointers and dynamic memory allocation. Introduction to classes and objects. Mechanical and industrial engineering applications. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: one hour per week.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 221',
              'course_name' => 'Materials Science ',
              'description' => 'Relationships between properties and internal structure, atomic bonding; molecular, crystalline and amorphous structures, crystalline imperfections and mechanisms of structural change. Microstructures and their development from phase diagrams. Structures and mechanical properties of polymers and ceramics. Thermal, optical, and magnetic properties of materials. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'MECH 311',
              'course_name' => 'Manufacturing Processes ',
              'description' => 'Fundamentals of manufacturing processes and their limitations, metrology, machine shop practice, safety and health considerations, forming, conventional machining and casting processes, welding and joining, plastic production, and non-conventional machining techniques. Sustainable technologies. Laboratory includes instruction and practice on conventional machine tools and a manufacturing project. Lectures: three hours per week. Tutorial: two hours per week, including industrial visits and field trips to local industries. Laboratory: three hours per week, alternate weeks.',
              'credits' => 3.75
            ],
            [
              'course_code' => 'MECH 313',
              'course_name' => 'Machine Drawing and Design ',
              'description' => 'Introduction to engi­neering design and design process. Problem definition, solution formulation, model development and collaboration aspects of design process.The use of drawings and other graphical methods in the process of engineering design. Industrial standards and specifications, design of fits, linear and geometrical tolerances. Design projects based on design philosophies will involve design and selection of many standard machine com­ponents like mechanical drives, cams, clutches, couplings, brakes, seals, fasteners, springs, and bearings. Drawing representation of standard components. Design projects are an integral part of this course. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'MECH 321',
              'course_name' => 'Properties and Failure of Materials ',
              'description' => 'The service capabilities of alloys and their relationship to microstructure as produced by thermal and mechanical treatments; tensile and torsion tests; elements of dislocation theory; strengthening mechanisms; composite materials. Modes of failure of materials; fracture, fatigue, wear, creep, corrosion, radiation damage. Failure analysis. Material codes; material selection for design. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 343',
              'course_name' => 'Theory of Machines ',
              'description' => 'Introduction to mechanisms; position and displacement; velocity; acceleration; synthesis of linkage; robotics; static force analysis; dynamic force analysis; forward kinematics and inverse kinematics; introduction to gear analysis and gear box design; kinematic analysis of spatial mechanisms. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 344',
              'course_name' => 'Machine Element Design ',
              'description' => 'Introduction to machine design; static failure theories; failure of ductile vs. brittle materials under static loading. Fatigue failure theories; fatigue loads; notches and stress concentrations; residual stresses; designing for high cycle fatigue. Design of shafts, keys and couplings. Design of spur gears. Spring design. Design of screws and fasteners. Design of bearings. Case studies. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'MECH 351',
              'course_name' => 'Thermodynamics II ',
              'description' => 'Brief review of ideal gas processes. Semi-perfect gases and the gas tables. Mixtures of gases, gases and vapours, air conditioning processes. Combustion and combustion equilibrium. Applications of thermo­dynamics to power production and utilization systems: study of basic and advanced cycles for gas compression, internal combustion engines, power from steam, gas turbine cycles, and refrigeration. Real gases. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 352',
              'course_name' => 'Heat Transfer I ',
              'description' => 'Analytical and numerical methods for steady-state and transient heat conduction. Empirical and practical relations for forced- and free-convection heat transfer. Radiation heat exchange between black bodies, and between non-black bodies. Gas radiation. Solar radiation. Effect of radiation on temperature measurement. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 361',
              'course_name' => 'Fluid Mechanics II ',
              'description' => 'Differential analysis of fluid flows, vorticity, stream function, stresses, and strains. Navier-Stokes equations and solutions for parallel flows. Euler’s equations, irrotational and potential flows, plane potential flows. Viscous flows in pipes, laminar and turbulent flows, major and minor losses. Flow over immersed bodies, boundary layers, separation and thickness. Drag, lift and applications. Introduction to compressible flows, speed of sound, Mach cone, and some characteristics of supersonic flows. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 368',
              'course_name' => 'Electronics for Mechanical Engineers ',
              'description' => 'Dependent sources, voltage and current dividers, voltage and current sources, superposition, Thevenin and Norton equivalent sources, linear and nonlinear circuit analysis. Semiconductors and diodes. Bipolar Junction Transistors (BJT), Field Effect Transistors (FET); amplifiers and switches. Operational amplifiers; circuits and frequency response. Digital logic components and circuits. Digital systems. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 370',
              'course_name' => 'Modelling and Analysis of Dynamic Systems ',
              'description' => 'Definition and classification of dynamic systems and components. Modelling of dynamic systems containing individual or mixed mechanical, electrical, fluid and thermal elements. Block diagrams representation and simulation techniques using MATLAB/Simulink. Time domain analysis. Transient and steady-state characteristics of dynamic systems. Linearization. Transfer functions. Introduction to feedback control systems. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 371',
              'course_name' => 'Analysis and Design of Control Systems ',
              'description' => 'Stability of linear feedback systems. Root-Locus method. Frequency response concepts. Stability in the frequency domain. Feedback system design using Root Locus techniques. Compensator concepts and configurations. PID-controller design. Simulation and computer-aided controller design using Matlab/Simulink. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: three hours per week, alternate weeks.',
              'credits' => 3.75
            ],
            [
              'course_code' => 'MECH 375',
              'course_name' => 'Mechanical Vibrations ',
              'description' => 'Transient vibrations under impulsive shock and arbitrary excitation: normal modes, free and forced vibration. Multi-degree of freedom systems, influence coefficients, orthogonality principle, numerical methods. Continuous systems; longitudinal torsional and flexural free and forced vibrations of prismatic bars. Lagrange’s equations. Vibration measurements. Lectures: three hours per week. Tutorial: two hours per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 390',
              'course_name' => 'Mechanical Engineering Design Project ',
              'description' => 'The design process; product cost, quality and time to market, open and concept design problems, problem description. Geometric and type synthesis. Direct and inverse design problems. Material selection and load determination. Mathematical modelling, analysis, and validation. Introduction to Computer-Aided Design and Engineering (CAD and CAE). Product evaluation for performance, tolerance, cost, manufacture, assembly, and other measures. Design documentation. A team-based design project is an intrinsic part of this course. Lectures: three hours per week. Tutorial: two hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'MECH 411',
              'course_name' => 'Instrumentation and Measurements ',
              'description' => 'Unified treatment of measurement of physical quantities; static and dynamic characteristics of instruments — calibration, linearity, precision, accuracy, and bias and sensitivity drift; sources of errors; error analysis; experiment planning; data analysis techniques; principles of transducers; signal generation, acquisition and processing; principles and designs of systems for measurement of position, velocity, acceleration, pressure, force, stress, temperature, flow-rate, proximity detection. The course includes demonstration of various instruments. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 412',
              'course_name' => 'Computer-Aided Mechanical Design ',
              'description' => 'Introduction to computational tools in the design process. Introduction to the fundamental approaches to computer-aided geometric modelling, physical modelling and engineering simulations. Establishing functions and functional specifications with emphasis on geometric tolerancing and dimensioning, manufacturing and assembly evaluation. Lectures: three hours per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 414',
              'course_name' => 'Computer Numerically Controlled Machining ',
              'description' => 'Computer aided design and manufacturing (CAD/CAM) hardware and software. Essentials of Computer Numerical Control (CNC) machine tools and systems. Process planning and tooling systems for CNC machining. Theory of CNC programming of sculptured parts. Multi-axis CNC tool path generation. Project using CAD/CAM software; CATIA for complex mechanical parts design and a CNC machine tool to manufacture parts. Lectures: three hours per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 415',
              'course_name' => 'Advanced Programming for Mechanical and Industrial Engineers ',
              'description' => 'Class definitions. Designing classes and member functions. Constructors and destructors. Class libraries and their uses. Input and output. Data abstrac­tion and encapsulation. Introduction to software engineering. Computer graphics and visualization. Numerical methods. Advanced mechanical and industrial engineering applications. This course includes a substantial project. Lectures: three hours per week. Tutorial: one hour per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'MECH 421',
              'course_name' => 'Mechanical Shaping of Metals and Plastics ',
              'description' => 'Metal forming: extrusion, forging, rolling, drawing, pressing, compacting; shear line theory, sheet forming limits. Metal cutting, machinability, tooling. Plastics shaping: extrusion, moulding, vacuum forming. Consideration of the mechanical parameters critical for process control and computer applications. Interaction of materials characteristics with processing to define product properties: cold working, annealing, hot working, super plasticity, thermomechanical treatment. Energy conservation, safety, product quality, and liability. Lectures: three hours per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 422',
              'course_name' => 'Mechanical Behaviour of Polymer Composite Materials ',
              'description' => 'General applications of polymer composite materials in aircraft, aerospace, automobile, marine, recreational, and chemical processing industries. Mechanics of a unidirectional lamina. Transformation of stress, strain, modulus, and compliance. Off-axis engineering constants, shear and normal coupling coefficients. In-plane and flexural stiffness and compliance with different laminates, including cross-ply, angle-ply, quasiisotropic, and general bidirectional laminates. Hygrothermal effects. Strength of laminates and failure criteria. Micromechanics. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'MECH 423',
              'course_name' => 'Casting, Welding, Heat Treating, and Non-Destructive Testing ',
              'description' => 'Comparative analysis of the various techniques of casting, welding, powder fabrication, finishing, and non-destructive testing. Consideration of the control parameters that are essential to define both automation and robot application. Materials behaviour which determines product micro-structure and properties. Technology and theory of solidification, normalizing, quenching, surface hardening, tempering, aging, and thermomechanical processing for steels, cast irons and Al, Cu, Ni and Ti alloys. Energy conservation, worker safety, quality control, and product liability. Lectures: three hours per week. Tutorial: one hour per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 424',
              'course_name' => 'MEMS — Design and Fabrication ',
              'description' => 'Introduction to microsystems and devices; mechanical properties of materials used in microsystems; microfabrication and post-processing techniques; sacrificial and structural layers; lithography, deposition and etching; introduction and design of different types of sensors and actuators; micromotors and other microdevices; mechanical design, finite element modelling; design and fabrication of free-standing structures; microbearings; special techniques: double-sided lithography, electrochemical milling, laser machining, LIGA, influence of IC fabrication methods on mechanical properties; application examples in biomedical, industrial, and space technology areas; integration, bonding and packaging of MEMS devices. Lectures: three hours per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 425',
              'course_name' => 'Manufacturing of Composites ',
              'description' => 'Fibres and resins. Hand lay up. Autoclave curing. Compression molding. Filament winding. Resin transfer molding. Braiding. Injection molding. Cutting. Joining. Thermoset and thermoplastic composites. Polymer Nanocomposites. Process modelling and computer simulation. Non-destructive evaluation techniques. Lectures: three hours per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 426',
              'course_name' => 'Stress and Failure Analysis of Machinery ',
              'description' => 'Analysis of stresses, strains and deformations in machine elements; non-symmetric bending of beams; shear centre for thin-walled beams; curved beams; torsion of non-circular shafts and tubes; thick wall cylinders; plates and shells; contact elements; stress concentrations; energy methods; failure modes, analysis and prevention; buckling, fracture, fatigue and creep. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'MECH 444',
              'course_name' => 'Guided Vehicle Systems ',
              'description' => 'Definition and classification of guided transportation systems. Track characterization: alignment, gage, profile, and cross-level irregularities. Wheel-rail interactions: rolling contact theories, creep forces. Modelling of guided vehicle components: wheel set, suspension, truck and car body configurations, suspension characteristics. Performance evaluation: stability hunting, ride quality. Introduction to ad­vanced vehicles. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'MECH 447',
              'course_name' => 'Fundamentals of Vehicle System Design ',
              'description' => 'Mechanics and construction of wheels and tires: rolling resistance, tractive and braking forces, brake system design: components of mechanical, hydraulic and pneumatic brake systems, braking efficiency, antilock braking devices, performance characteristics of road vehicles: transmission design, driving condition diagrams, acceleration, speed and stopping distance, gradability, steering mechanisms: design and kinematics, suspension spring and shock absorbers: anti-roll and anti-pitch devices, chassis and body design considerations. Lectures: three hours per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 448',
              'course_name' => 'Vehicle Dynamics ',
              'description' => 'Tire-terrain interactions; side-slip, cornering and aligning properties of tires; camber angle and camber torque; estimation of braking/tractive and cornering forces of tires; steady-state handling of road vehicles; steering response and directional stability; handling and directional response of vehicles with multiple steerable axles; handling of articulated vehicles; handling and directional response of tracked and wheeled off-road vehicles; directional response to simultaneous braking and steering. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'MECH 452',
              'course_name' => 'Heat Transfer II ',
              'description' => 'Heat exchangers. Condensation and boiling heat transfer. Principles of forced convection. Analysis of free convection from a vertical wall. Correlations for free convection in enclosed spaces. Mass transfer. Special topics of heat transfer. Lectures: three hours per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 453',
              'course_name' => 'Heating, Ventilation and Air Conditioning Systems ',
              'description' => 'Heating and cooling load calculation. Overview of heating and air conditioning systems. Review: Vapour compression refrigeration cycles, refrigerant properties, psychometrics. Performance characteristic of components: evaporators, condensers, compressors, throttling devices (expansion valves, capillary tubes). System performance characteristics: calculation of system operating conditions based on the capacities of its components and outdoor and indoor conditions. Controls: operational, capacity. Computer-aided design methods. Defrosting. Estimation of energy consumption for heating with heat pumps. Fundamentals of refrigerant piping, water piping, and air distribution systems. Experimental methods for system development. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'MECH 454',
              'course_name' => 'Vehicular Internal Combustion Engines ',
              'description' => 'Mechanical design of vehicular engines for different applications. Gas exchange and combustion engine processes. Combustion chambers design. Fuels for vehicular engines. Fuel supply, ignition and control systems. Cooling and lubrication of engines. Emissions formation and control. Engines’ operational characteristics — matching with vehicles. Enhancement of engine performance. Engine testing. Environmental impact of vehicular engines on global pollution. Recent developments in energy efficient and “clean” engines. Design or calculation project of vehicular engine. Lectures: three hours per week.',
              'credits' => 3
            ],
            [
              'course_code' => 'MECH 460',
              'course_name' => 'Finite Element Analysis ',
              'description' => 'Formulation and application of the finite element method to modelling of engineering problems, including stress analysis, vibrations, and heat transfer. Examples illustrating the direct approach, as well as variational and weighted residual methods. Elements and interpolation functions. Meshing effect. Error analysis. One- and two-dimensional boundary value problems. Development of simple programs and direct experience with general purpose packages currently used in industry for design problems. Lectures: three hours per week. Laboratory: three hours per week, alternate weeks.',
              'credits' => 3.75
            ],
            [
              'course_code' => 'MECH 461',
              'course_name' => 'Gas Dynamics ',
              'description' => 'Review of one-dimensional compressible flow. Normal and oblique shock waves; Prandtl-Meyer flow; combined effects in one-dimensional flow; non-ideal gas effects; multi-dimensional flow; linearized flow; method of characteristics. Selected experiments in supersonic flow, convergent-divergent nozzles, hydraulic analog and Fanno tube. Lectures: three hours per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 463',
              'course_name' => 'Fluid Power Control ',
              'description' => 'Introduction to fluid power; pneumatic devices; fluidic devices; hydraulic system components; hydraulic and electro-hydraulic systems; dynamic performance of fluid power systems; fluid logic. Lectures: three hours per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 471',
              'course_name' => 'Microcontrollers for Mechatronics ',
              'description' => 'Introduction to the concepts and practices of microcontrollers and their application for the control of electromechanical devices and systems. Study of the internal architecture of microcontrollers; programming in assembly language for specific microcontroller functions and controller algorithms; timing of the microcontroller and interfacing with peripheral devices. Students undertake hands-on project work by controlling the position or speed of a DC motor with a feed-back sensor. Lectures: three hours per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 472',
              'course_name' => 'Mechatronics and Automation ',
              'description' => 'Design and analysis of mechatronic and automation systems. Selection and integration of actuators, sensors, hardware, and software. Computer vision. Programming and software design for mechatronic systems. Modelling and simulation. Design of logic control systems. Finite state machine methods. Feedback control and trajectory generation. Safety logic systems. Case studies including automation systems, mobile robots, and unmanned vehicle systems. Lectures: three hours per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 473',
              'course_name' => 'Control System Design ',
              'description' => 'Analog and digital controller designs. Analog controllers: lead/lag compensators, pole placement, model matching, two-parameter configuration, plant input/output feedback configuration. Digital controllers: difference equations, Z-transform, stability in the Z-domain, digital implementation of analog controllers, equivalent digital plant method, alias signals, selection of sampling time. Introduction to analog/digital state-space: controllability, observability, state feedback, state estimator. PI and PID controllers. Simulink assignments and project. Hardware laboratory project: analog and digital controller design for motor with inertial plus generator load. Lectures: three hours per week. Laboratory: two hours per week, alternate weeks.',
              'credits' => 3.5
            ],
            [
              'course_code' => 'MECH 474',
              'course_name' => 'Mechatronics ',
              'description' => 'Introduction to mechatronics; basic elements of mechatronic systems. Measurement systems: including principles of measurement systems; sensors and transducers; signal conditioning processes and circuits; filters and data acquisition. Actuation systems: mechanical actuation systems and electrical actuation systems. Controllers: control modes; PID controller; performance measures; introduction to digital controllers and robust control. Modelling and analysis of mechatronic systems; performance measures; frequency response; transient response analysis; stability analysis. Lectures: three hours per week. Laboratory: three hours per week, alternate weeks.',
              'credits' => 3.75
            ],
            [
              'course_code' => 'MECH 490A',
              'course_name' => 'Capstone Mechanical Engineering Design Project ',
              'description' => 'A supervised design, simulation or experimental capstone design project including a preliminary project proposal with complete project plan and a technical report at the end of the fall term; a final report by the group and presentation at the end of the winter term. Lectures: one hour per week, one term. Equivalent laboratory time: three hours per week, two terms.',
              'credits' => 4
            ],
            [
              'course_code' => 'MECH 490B',
              'course_name' => 'Capstone Mechanical Engineering Design Project ',
              'description' => 'A supervised design, simulation or experimental capstone design project including a preliminary project proposal with complete project plan and a technical report at the end of the fall term; a final report by the group and presentation at the end of the winter term. Lectures: one hour per week, one term. Equivalent laboratory time: three hours per week, two terms.',
              'credits' => 4
            ],
            [
              'course_code' => 'MECH 490C',
              'course_name' => 'Capstone Mechanical Engineering Design Project ',
              'description' => 'A supervised design, simulation or experimental capstone design project including a preliminary project proposal with complete project plan and a technical report at the end of the fall term; a final report by the group and presentation at the end of the winter term. Lectures: one hour per week, one term. Equivalent laboratory time: three hours per week, two terms.',
              'credits' => 4
            ],
            [
              'course_code' => 'MECH 498',
              'course_name' => 'Topics in Mechanical Engineering ',
              'description' => 'This course may be offered in a given year upon the authorization of the Mechanical and Industrial Engineering Department. The course content may vary from offering to offering and will be chosen to complement the elective courses available in a given option or options. Lectures: three hours per week.',
              'credits' => 3
            ],
        ]);
    }
}
