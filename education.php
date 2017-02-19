<!--
    * Author: Mason Ziedonis
    * URL: www.masonziedonis.com
    * Email: mziedonis@berkeley.edu
    * Program Name: Mason Ziedonis's Personal Website
    * Date Started: Jan. 4, 2017
    * Date Last Updated: Feb. 19, 2017
    * Github: https://github.com/masonziedonis/websites/tree/masonziedonis
    *
    * Description: This is the education page to find out about my coursework and computer language proficiencies.
    *
    * Copyright (C) 2017 Mason Ziedonis
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="og:description" content="Hey, I’m Mason. Check out what I have learned at University and my computer language proficiencies!">
    <title>Education | Mason Ziedonis</title>
    <meta name="description" lang="en" content="Hey, I’m Mason. Check out what I have learned at University and my computer language proficiencies!">
    <meta name="keywords" lang="en" content="">
    <?php include './content/head.php';?>
</head>
    
<body id="page-education">
    <?php include './content/header.php';?>
    
    <span id="resume"><a href="./downloads/resume/Mason%20Ziedonis%20Resume%20-%20012417.pdf" title="Download the latest version of my resume" download="Mason Ziedonis Resume - 012417.pdf" target="_blank">Grab a copy of my resume!</a></span>
    
    <section id="course-filter">
        <h2>Courses</h2>
        <form class="filter">
            <div class="label-box filter-cs">
                <label>Computer Science</label>
                <input type="checkbox" name="cs" value="cs" checked="checked">
            </div>    
            <div class="label-box filter-ee">
                <label>Electrical Engineering</label>
                <input type="checkbox" name="ee" value="ee" checked="checked">
            </div>
            <div class="label-box filter-math">        
                <label>Math</label>
                <input type="checkbox" name="math" value="math" checked="checked">
            </div>
            <div class="title">Filter By Subject</div>
        </form>
    </section>
    
    <section id="courses">
        <div class="course course-ee">
            <p class="course-number">EE16A</p>
            <p class="course-name">Designing Information Devices and Systems I</p>
            <p class="course-subject">Electrical Engineering</p>
            <div class="course-description">
                <div><p class="description-label">Description</p><span class="icon-right-arrow"></span></div>
                <p class="text-description">The EECS 16 series (Designing Information Devices and Systems) is a pair of courses introducing students to EECS, with a particular emphasis on how we deal with systems interacting with the world from an information point of view. Mathematical modeling is an important theme throughout these courses, and students will learn many conceptual tools along the way. Throughout this series, generally applicable concepts and techniques are motivated by, and rooted in, specific exemplary application domains. Students should understand why they are learning something.
                <p class="text-description">In EECS 16A, we will use the application domains of imaging and tomography, touchscreens, and GPS and localization to motivate and inspire. Along the way, we will learn the basics of linear algebra and, more importantly, the linear-algebraic way of looking at the world. We will emphasize modeling and using linear structures to solve problems---not on how to do computations per se. We will learn about linear circuits, not merely as a powerful and creative way to help connect the physical world to what we can process computationally, but also as an exemplar of linearity and as a vehicle for learning how to do design. Circuits also provide a concrete setting in which to learn the key concept of "equivalence" --- an important aspect of abstraction. Our hope is that the concepts you learn in EECS 16A will help you as you tackle more advanced courses and will help form a solid conceptual framework that will help you learn throughout your career.</p>
            </div>
            <div class="course-topics">
                <div><p>Topics Covered</p><span class="icon-right-arrow"></span></div>
                <ul>
                    <li>Intro to Imaging/Tomography</li>
                    <li>Vectors and Systems of Equations</li>
                    <li>Linear Dependence</li>
                    <li>Rank</li>
                    <li>Span</li>
                    <li>Inverses</li>
                    <li>Vector Spaces</li>
                    <li>Basis</li>
                    <li>Nullspaces</li>
                    <li>Graphs</li>
                    <li>Circuits</li>
                    <li>Kirchhoff’s Law</li>
                    <li>Design and Touchscreen</li>
                    <li>Equivalence</li>
                    <li>Superposition</li>
                    <li>Power</li>
                    <li>Capacitors</li>
                    <li>Op-Amps</li>
                    <li>Inner Products and Orthogonality</li>
                    <li>Correlations</li>
                    <li>Trilateration</li>
                    <li>Least Squares</li>
                    <li>QR Factorization</li>
                    <li>PageRank</li>
                    <li>Diagonalization</li>
                </ul>
            </div>
        </div>
        <div class="course course-cs">
            <p class="course-number">CS70</p>
            <p class="course-name">Discrete Mathematics and Probability Theory </p>
            <p class="course-subject">Computer Science</p>
            <div class="course-description">
                <div><p>Description</p><span class="icon-right-arrow"></span></div>
                <p class="text-description">The goal of this course is to introduce students to ideas and techniques from discrete mathematics that are widely used in Electrical Engineering and Computer Sciences. The course aims to present these ideas "in action"; each one will be geared towards a specific significant application. Thus, students will see the purpose of the techniques at the same time as learning about them.</p>
            </div>
            <div class="course-topics">
                <div><p>Topics Covered</p><span class="icon-right-arrow"></span></div>
                <ul>
                    <li>Review of Math Notation</li>
                    <li>Propositions and Quantifiers</li>
                    <li>Proofs</li>
                    <li>Induction</li>
                    <li>Stable Marriage</li>
                    <li>Graph Theory</li>
                    <li>Modular Arithmetic</li>
                    <li>Bijections and RSA</li>
                    <li>Polynomials</li>
                    <li>Error Correcting Codes</li>
                    <li>Infinity and Uncountability</li>
                    <li>Self-Reference and Incommutability</li>
                    <li>Counting</li>
                    <li>Introduction to Discrete Probability</li>
                    <li>Conditional Probability</li>
                    <li>Two Killer Applications</li>
                    <li>Random Variables</li>
                    <li>Variance</li>
                    <li>Chebyshev's Inequality</li>
                    <li>Some Important Distributions</li>
                    <li>Continuous Probability</li>
                    <li>Markov Chains</li>
                    <li>Review of Probability</li>
                    <li>Estimation</li>
                </ul>
            </div>
        </div>
        <div class="course course-cs">
            <p class="course-number">CS61C</p>
            <p class="course-name">Great Ideas in Computer Architecture (Machine Structures)</p>
            <p class="course-subject">Computer Science</p>
            <div class="course-description">
                <div><p>Description</p><span class="icon-right-arrow"></span></div>
                <p class="text-description">CS61C is about the hardware-software interface and what the programmer needs to know to achieve the highest possible performance. The course uses C because languages like C are closer to the underlying hardware, unlike languages like Python. This allows us to talk about key hardware features in higher level terms and allows the programmer to explicitly harness underlying hardware parallelism for high performance: “programming for performance.”</p>
            </div>
            <div class="course-topics">
                <div><p>Topics Covered</p><span class="icon-right-arrow"></span></div>
                <ul>
                    <li>Design for Moore’s Law (Multicore, Parallelism, OpenMP)</li>
                    <li>Abstraction to Simplify Design (Everything is a Number, Machine/Assembler Language, C, Logic Gates, Datapaths)</li>
                    <li>Make the Common Case Fast (RISC Architecture)</li>
                    <li>Dependability via Redundancy (ECC, RAID)</li>
                    <li>Memory Hierarchy (Locality, Consistency, False Sharing)</li>
                    <li>Performance via Parallelism/Pipelining/Prediction</li>
                    <li>Request Level Parallelism (Warehouse Scale Computers)</li>
                    <li>Instruction Level Parallelism (Pipelining, CPI > 1)</li>
                    <li>(Fine Grain) Data Level Parallelism (AVX SIMD Instructions)</li>
                    <li>(Course Grain) Data/Task Level Parallelism (Big Data Analytics, MapReduce/Spark)</li>
                    <li>Thread Level Parallelism (Multicore Machines, OpenMP)</li>
                </ul>
            </div>
            <div class="course-languages">
                <div><p>Languages Covered</p><span class="icon-right-arrow"></span></div>
                    <ul>
                    <li>C</li>
                    <li>MIPS</li>
                    <li>Logisim</li>
                    <li>Spark</li>
                    <li>Git</li>
                </ul>
            </div>
            <div class="course-projects">
                <div><p>Projects</p><span class="icon-right-arrow"></span></div>
                    <ul>
                    <li>
                        <h3>Project 1: Flight Map</h3>
                        <p>Imagine you're an airline, tasked with routing people between various cities, while maintaining an ever-changing map of cities and flights between cities. We're going to build a simple system to solve this problem. Our system will keep track of a set of named cities as well as a set of bi-directional links between them. It'll be able to answer queries about the number of cities and the links each city has to others, and also find routes between cities.<br>

                        You will be completing the implementation of flight_map.c, which is tied to the header file flight_map.h. The header file includes an abstract struct definition map_t, which you will need to fill in, as well as signatures for the functions you will need to implement. We will describe these components in a bit more detail below. There is also a file tests.c, where you can place your own tests (more on testing later).</p>
                        <a href="http://www-inst.eecs.berkeley.edu/~cs61c/fa16/projs/01/" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                    <li>
                        <h3>Project 2-1: MIPS Assembler</h3>
                        <p>In this part of the project, we will be writing an assembler that translates a subset of the MIPS instruction set to machine code. Our assembler is a two-pass assembler similar to the one described in lecture. However, we will only assemble the .text segment. At a high level, the functionality of our assembler can be divided as follows:<br>

                        Pass 1: Reads the input (.s) file. Comments are stripped, pseudoinstructions are expanded, and the address of each label is recorded into the symbol table. Input validation of the labels and pseudoinstructions is performed here. The output is written to an intermediate (.int) file. <br>

                        Pass 2: Reads the intermediate file and translates each instruction to machine code. Instruction syntax and arguments are validated at this step. The relocation table is generated, and the instructions, symbol table, and relocation table are written to an object (.out) file.</p>
                        <a href="http://www-inst.eecs.berkeley.edu/~cs61c/fa16/projs/02_1/" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                    <li>
                        <h3>Project 2-2: MIPS Linker</h3>
                        <p>In part 1 of this project, we wrote an assembler in C. Now, we will continue where we left off by implementing a linker in MIPS. The linker processes object files (which in our project are .out files) and generates an executable file. In the rest of this document, "input" will be used interchangeably with "object file", and "output" with "executable file".<br>

                        The linker has two main tasks, combining code and relocating symbols. Code from each input file's .text segment is merged together to create an executable. This also determines the absolute address of each symbol (recall that the assembler outputs a symbol table containing the relative address of each symbol). Since the absolute address is known, instructions that rely on absolute addressing can have the addresses filled in.</p>
                        <a href="http://www-inst.eecs.berkeley.edu/~cs61c/fa16/projs/02_2/" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                    <li>
                        <h3>Project 3-1: ALU and Regfile</h3>
                        <p>In this project you will be using Logisim to implement a simple 32-bit two-cycle processor. Throughout the implementation of this project, we'll be making design choices that make it compatible with machine code outputs from MARS and your Project 2! When you're done, you'll be able to run most, but not all, instances of MIPS code through your assembler and linker, and then on your very own CPU! We have left out some functionality to make the project easier.<br>

                        In part I, you will make the Regfile and ALU.</p>
                        <a href="http://www-inst.eecs.berkeley.edu/~cs61c/fa16/projs/03_1/" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                    <li>
                        <h3>Project 3-2: CPU</h3>
                        <p>Now that you've implemented the Regfile and ALU, you're ready to design your own 2-stage pipelined processor! When you're done, you'll be able to run MIPS code through your assembler and linker, and then on your very own CPU</p>
                        <a href="http://www-inst.eecs.berkeley.edu/~cs61c/fa16/projs/03_2/" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                    <li>
                        <h3>Project 4: Performance Optimization</h3>
                        <p>Cameras traditionally capture a two dimensional projection of a scene. However depth information is important for many real-world application. For example, robotic navigation, face recognition, gesture or pose recognition, 3D scanning and more. The human visual system can perceive depth by comparing the images captured by our two eyes. This is called stereo vision. In this project we will experiment with a simple computer vision/image processing technique, called "shape from stereo" that, much like humans do, computes the depth information from stereo images (images taken from two locations that are displaced by a certain amount).<br>

                        Optimize the naive depth map generator using any of the techniques you learned, including OpenMP. For full credit, the program needs to achieve an average speedup of 4.5x for the odd cases given in the benchmark, and 5.5x for the non-odd cases given in the benchmark.</p>
                        <a href="http://www-inst.eecs.berkeley.edu/~cs61c/fa16/projs/04/" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                    <li>
                        <h3>Project 5: Image Compression with Spark</h3>
                        <p>There have always been different methods of video compression in order to adapt videos to be rendered more easily on devices with less memory or computing capacity. We will be implementing a scheme using the Discrete Cosine Transform (DCT) to perform video compression. This form of lossy compression encoding is typically used alongside lossless compression to compress video files. For the purposes of this project, we will only focus on the lossy aspect.</p>
                        <a href="http://www-inst.eecs.berkeley.edu/~cs61c/fa16/projs/05/" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="course course-math">
            <p class="course-number">Math 54</p>
            <p class="course-name">Linear Algebra and Differential Equations</p>
            <p class="course-subject">Math</p>
            <div class="course-description">
                <div><p>Description</p><span class="icon-right-arrow"></span></div>
                <p class="text-description">Basic linear algebra; matrix arithmetic and determinants. Vector spaces; inner product spaces. Eigenvalues and eigenvectors; linear transformations. Homogeneous ordinary differential equations; first-order differential equations with constant coefficients. Fourier series and partial differential equations</p>
            </div>
            <div class="course-topics">
                <div><p>Topics Covered</p><span class="icon-right-arrow"></span></div>
                <ul>
                    <li>Linear Equations in Linear Algebra</li>
                    <li>Matrix Algebra</li>
                    <li>Determinants</li>
                    <li>Vector Spaces</li>
                    <li>Eigenvalues and Eigenvectors</li>
                    <li>Orthogonality and Least Squares</li>
                    <li>Symmetry Matrices and Quadratic Forms</li>
                    <li>Linear Second-Order Equations</li>
                    <li>Theory of Higher-Order Linear Differential Equations</li>
                    <li>Matrix Methods for Linear Systems</li>
                    <li>Partial Differential Equations</li>
                </ul>
            </div>
        </div>
        <div class="course course-cs">
            <p class="course-number">CS61B</p>
            <p class="course-name">Data Structures and Advanced Programming</p>
            <p class="course-subject">Computer Science</p>
            <div class="course-description">
                <div><p>Description</p><span class="icon-right-arrow"></span></div>
                <p class="text-description">The CS 61 series is an introduction to computer science, with particular emphasis on software and machines from a programmer's point of view. In CS 61B, we move to a somewhat more detailed (and to some extent, more basic) level of programming.</p>
                <p class="text-description">In CS61B, we're concerned also with engineering. An engineer, it is said, is someone who can do for a dime what any fool can do for a dollar. Much of 61B will be concerned with the tradeoffs in time and memory for a variety of methods for structuring data. We'll also be concerned with the engineering knowledge and skills needed to build and maintain moderately large programs.</p>
            </div>
            <div class="course-topics">
                <div><p>Topics Covered</p><span class="icon-right-arrow"></span></div>
                <ul>
                    <li>Object Oriented Programming: Interface/Implementation Inheritance</li>
                    <li>Dynamic vs. Static Typing</li>
                    <li>Generic Programming</li>
                    <li>The Model of Memory as Boxes Containing Bits</li>
                    <li>Bit Representation of Positive Integers</li>
                    <li>Objects as Function Containers</li>
                    <li>Default Method Specification in Interfaces</li>
                    <li>Iterators and Views</li>
                    <li>Mathematical Analysis of Data Structure/Algorithm Performance (Asymptotic Analysis, Worst Case vs. Average Case vs. Best Case, Determining the Runtime of Code through Empirical Analysis and Inspection, <li>Amortized Time</li>
                    <li>Array-based Data Structures (ArrayLists and ArrayDeque, HashSets, HashMaps, ArrayHeap (tree represented as an array))</li> 
                    <li>Linked Data Structures (Linked Lists (LinkedList, IntList, LinkedListDeque), Trees (TreeSet, TreeMap, BSTMap, Tries), Graphs (generalization of a tree)</li>
                    <li>Tradeoffs of Arrays vs. Linked Data Structures</li>
                    <li>Prim’s Algorithm</li>
                    <li>Kruskal’s Algorithm</li>
                    <li>Dijkstra’s Algorithm</li>
                    <li>A* Search Algorithm</li>
                    <li>Sorting Algorithms</li>
                    <li>Huffman Coding</li>
                    <li>Java Syntax and Idioms</li>
                    <li>JUnit Testing</li>
                    <li>Test-driven Development</li>
                    <li>Debugging</li>
                    <li>Data Structure Selection (and API design)</li>
                    <li>Working with Complex APIs</li>
                </ul>
            </div>
            <div class="course-languages">
                <div><p>Languages Covered</p><span class="icon-right-arrow"></span></div>
                <ul>
                    <li>Java</li>
                    <li>Git</li>
                </ul>
            </div>
            <div class="course-projects">
                <div><p>Projects</p><span class="icon-right-arrow"></span></div>
                <ul>
                    <li>
                        <h3>Project 0: NBody Simulation</h3>
                        <p>Ultimately, you will be creating a program NBody.java that draws an animation of bodies floating around in space tugging on each other with the power of gravity.</p>
                        <a href="http://datastructur.es/sp16/materials/proj/proj0/proj0.html" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                    <li>
                        <h3>Project 1a: Data Structures</h3>
                        <p>In project 1, we will build implementations of a "Double Ended Queue" using both lists and arrays. We will later learn how to write our own tests for those data structures, and finally we will use those data structures to solve a small real world problem.<br>

                        Project 1a is the implementation of the data structures. In this part of the project you will create exactly two Java files: LinkedListDeque.java and ArrayDeque.java, with public methods listed below.</p>
                        <a href="http://datastructur.es/sp16/materials/proj/proj1a/proj1a.html" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                    <li>
                        <h3>Project 1b: Data Structures</h3>
                        <p>In project 1b, you will build a rudimentary autograder for project 1a.</p>
                        <a href="http://datastructur.es/sp16/materials/proj/proj1b/proj1b.html" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                    <li>
                        <h3>Project 1c: Data Structures</h3>
                        <p>In project 1c, you will build a program that uses the Deque classes to find English words with interesting properties.</p>
                        <a href="http://datastructur.es/sp16/materials/proj/proj1c/proj1c.html" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                    <li>
                        <h3>Project 2: Editor</h3>
                        <p>In this project, you will build a text editor from scratch. You are probably familiar with a variety of different text editors, including relatively simple text editors that allow you to edit un-styled text (e.g., pico, Notepad, and TextEdit), and also more fully-featured text editors that allow you to do add formatting, run code, and more (e.g., Microsoft Word, Google Docs, Sublime, VI, Emacs, and IntelliJ). For this project, you'll implement a basic text editor that can be used to open, edit, and save plain text files.</p>
                        <a href="http://datastructur.es/sp16/materials/proj/proj2/proj2.html" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                    <li>
                        <h3>Project 3: Bear Maps</h3>
                        <p>Project 3 is a web mapping application, inspired by my time on the Google Maps team and the OpenStreetMap project, from which the tile images and map feature data was downloaded. You are working with real-world mapping data here that is freely available - after you've finished this project, you can even extend your code to support a wider range of features. You will be writing the back end - the web server that powers the API that the front end makes requests to.<br>

                        Your job is to implement a web API. You will write a web server that hosts some endpoints that take in parameters and provide output in JSON.</p>
                        <a href="http://datastructur.es/sp16/materials/proj/proj3/proj3.html" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="course course-cs">
            <p class="course-number">CS61A</p>
            <p class="course-name">The Structure and Interpretation of Computer Programs</p>
            <p class="course-subject">Computer Science</p>
            <div class="course-description">
                <div><p>Description</p><span class="icon-right-arrow"></span></div>
                <p class="text-description">The CS 61 series is an introduction to computer science, with particular emphasis on software and on machines from a programmer's point of view. This first course concentrates mostly on the idea of abstraction, allowing the programmer to think in terms appropriate to the problem rather than in low-level operations dictated by the computer hardware.</p>
                <p class="text-description">In CS 61A, we are interested in teaching you about programming, not about how to use one particular programming language. We consider a series of techniques for controlling program complexity, such as functional programming, data abstraction, and object-oriented programming. Mastery of a particular programming language is a very useful side effect of studying these general techniques. However, our hope is that once you have learned the essence of programming, you will find that picking up a new programming language is but a few days' work.</p>
            </div>
            <div class="course-topics">
                <div><p>Topics Covered</p><span class="icon-right-arrow"></span></div>
                <ul>
                    <li>Functions</li>
                    <li>Names</li>
                    <li>Control</li>
                    <li>Higher-Order Functions</li>
                    <li>Environments</li>
                    <li>Recursion</li>
                    <li>Tree Recursion</li>
                    <li>Data Abstraction</li>
                    <li>Sequences</li>
                    <li>Trees</li>
                    <li>Mutable Values</li>
                    <li>Mutable Functions</li>
                    <li>Objects</li>
                    <li>Inheritance</li>
                    <li>Representation</li>
                    <li>Composition</li>
                    <li>Hierarchy</li>
                    <li>Growth</li>
                    <li>Sets</li>
                    <li>Users</li>
                    <li>Scheme</li>
                    <li>Exceptions</li>
                    <li>Interpreters</li>
                    <li>Tail Calls</li>
                    <li>Iterators</li>
                    <li>Streams</li>
                    <li>Declarative Programming</li>
                    <li>Tables</li>
                    <li>Recursive Select</li>
                    <li>Aggregation</li>
                    <li>Distributed Computing</li>
                    <li>Distributed Data</li>
                </ul>
            </div>
            <div class="course-languages">
                <div><p>Languages Covered</p><span class="icon-right-arrow"></span></div>
                <ul>
                    <li>Python</li>
                    <li>SQL</li>
                    <li>Scheme</li>
                    <li>Spark</li>
                    <li>Git</li>
                </ul>
            </div>
            <div class="course-projects">
                <div><p>Projects</p><span class="icon-right-arrow"></span></div>
                <ul>
                    <li>
                        <h3>Project 1: The Game of Hog</h3>
                        <p>In this project, you will develop a simulator and multiple strategies for the dice game Hog. You will need to use control statements and higher-order functions together.<br>

                        In Hog, two players alternate turns trying to be the first to end a turn with at least 100 total points. On each turn, the current player chooses some number of dice to roll, up to 10. That player's score for the turn is the sum of the dice outcomes. To spice up the game, we will play with some additional special rules (see full spec for more information).</p>
                        <a href="https://inst.eecs.berkeley.edu/~cs61a/fa15/proj/hog/" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                    <li>
                        <h3>Project 2: Yelp Maps</h3>
                        <p>In this project, you will create a visualization of restaurant ratings using machine learning and the Yelp academic dataset. In this visualization, Berkeley is segmented into regions, where each region is shaded by the predicted rating of the closest restaurant (yellow is 5 stars, blue is 1 star). Specifically, the visualization you will be constructing is a Voronoi diagram.</p>
                        <a href="https://inst.eecs.berkeley.edu/~cs61a/fa15/proj/maps/" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                    <li>
                        <h3>Project 3: Ants Vs. SomeBees</h3>
                        <p>In this project, you will create a tower defense game called Ants Vs. SomeBees. As the ant queen, you populate your colony with the bravest ants you can muster. Your ants must protect their queen from the evil bees that invade your territory. Irritate the bees enough by throwing leaves at them, and they will be vanquished. Fail to pester the airborne intruders adequately, and your queen will succumb to the bees' wrath. This game is inspired by PopCap Games' Plants Vs. Zombies.</p>
                        <a href="https://inst.eecs.berkeley.edu/~cs61a/fa15/proj/ants/" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                    <li>
                        <h3>Project 4: A Scheme Interpreter</h3>
                        <p>In this project, you will develop an interpreter for a subset of the Scheme language. As you proceed, think about the issues that arise in the design of a programming language; many quirks of languages are byproducts of implementation decisions in interpreters and compilers. The subset of the language used in this project is described in the functional programming section of Composing Programs.<br>

                        The project concludes with an open-ended graphics contest that challenges you to produce recursive images in only a few lines of Scheme. As an example, the picture above abstractly depicts all the ways of making change for $0.50 using U.S. currency. All flowers appear at the end of a branch with length 50. Small angles in a branch indicate an additional coin, while large angles indicate a new currency denomination. In the contest, you too will have the chance to unleash your inner recursive artist.
                        </p>
                        <a href="https://inst.eecs.berkeley.edu/~cs61a/fa15/proj/scheme/" title="">Full Project Specifications</a>
                        <a href="./contact.php" title="Request Access to Code">Request Access to Code</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="course course-math">
            <p class="course-number">Math 1A/1B</p>
            <p class="course-name">Calculus</p>
            <p class="course-subject">Math</p>
            <div class="course-description">
                <div><p>Description</p><span class="icon-right-arrow"></span></div>
                <p class="text-description">An introduction to differential and integral calculus of functions of one variable, with applications and an introduction to transcendental functions. Techniques of integration; applications of integration. Infinite sequences and series. First-order ordinary differential equations. Second-order linear ordinary differential equations.</p>
            </div>
            <div class="course-topics">
                <div><p>Topics Covered</p><span class="icon-right-arrow"></span></div>
                <ul>
                    <li>Functions and Models</li>
                    <li>Limits and Derivatives</li>
                    <li>Differentiation Rules</li>
                    <li>Applications of Differentiation</li>
                    <li>Integrals</li>
                    <li>Applications of Integration</li>
                    <li>Techniques of Integration</li>
                    <li>Further Applications of Integration, </li>
                    <li>Infinite Sequences and Series</li>
                    <li>Differential Equations</li>
                    <li>Second-Order Differential Equations</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="skillset">
        <h2>Languages</h2>
        <div>
            <h3>Basic</h3>
            <h3>Intemediate</h3>
            <h3>Proficient</h3>
            <h3>Advanced</h3>
            <h3>Expert</h3>
            <ul>
                <li id="java" class="advanced"><p>Java</p></li>
                <li id="python" class="advanced"><p>Python</p></li>
                <li id="javascript" class="advanced"><p>JavaScript (jQuery, node.js)</p></li>
                <li id="c" class="proficient"><p>C</p></li>
                <li id="html" class="proficient"><p>HTML5</p></li>
                <li id="css" class="proficient"><p>CSS3</p></li>
                <li id="php" class="intermediate"><p>PHP</p></li>
                <li id="wordpress" class="intermediate"><p>WordPress</p></li>
                <li id="sql" class="basic"><p>SQL</p></li>
            </ul>
        </div>
    </section>
       
    <?php include './content/footer.php';?>
    
</body>
</html>
