'use strict';

var app = angular.module('prisms', ['ui.router']);

app.config(['$stateProvider', '$urlRouterProvider', function ($stateProvider, $urlRouterProvider) {
    $stateProvider
        .state('home', {
            url: '/home',
            templateUrl: 'partials/home/home.html',
            controller: 'HomeController'
        })
        .state('science', {
            url: '/science',
            templateUrl: 'partials/science/science.html'
        })
        .state('science.overview', {
            url: '/overview',
            templateUrl: 'partials/science/overview.html'
        })
        .state('science.precipitate', {
            url: '/precipitate',
            templateUrl: 'partials/science/precipitate.html'
        })
        .state('science.recrystallization', {
            url: '/recrystallization',
            templateUrl: 'partials/science/recrystallization.html'
        })
        .state('science.tensile', {
            url: '/tensile',
            templateUrl: 'partials/science/tensile.html'
        })
        .state('science.fatigue', {
            url: '/fatigue',
            templateUrl: 'partials/science/fatigue.html'
        })
        .state('science.collaborate', {
            url: '/collaborate',
            templateUrl: 'partials/science/collaborate.html'
        })
        .state('ctools', {
            url: '/ctools',
            templateUrl: 'partials/ctools/ctools.html'
        })
        .state('ctools.overview', {
            url: '/overview',
            templateUrl: 'partials/ctools/overview.html'
        })
        .state('ctools.software', {
            url: '/software',
            templateUrl: 'partials/ctools/software.html'
        })
        .state('ctools.tools', {
            url: '/tools',
            templateUrl: 'partials/ctools/tools.html'
        })
        .state('ctools.collaborate', {
            url: '/collaborate',
            templateUrl: 'partials/ctools/collaborate.html'
        })
        .state('ctools.faq', {
            url: '/faq',
            templateUrl: 'partials/ctools/faq.html'
        })
        .state('mcommons', {
            url: '/mcommons',
            templateUrl: 'partials/mcommons/mcommons.html'
        })
        .state('mcommons.overview', {
            url: '/overview',
            templateUrl: 'partials/mcommons/overview.html'
        })
        .state('mcommons.software', {
            url: '/software',
            templateUrl: 'partials/mcommons/software.html'
        })
        .state('mcommons.collaborate', {
            url: '/collaborate',
            templateUrl: 'partials/mcommons/collaborate.html'
        })
        .state('mcommons.faq', {
            url: '/faq',
            templateUrl: 'partials/mcommons/faq.html'
        })
        .state('people', {
            url: '/people',
            templateUrl: 'partials/people/people.html',
            controller: 'PeopleController'
        })
        .state('people.faculty', {
            url: '/faculty/:who',
            templateUrl: 'partials/people/faculty_staff.html',
            controller: 'FacultyController'
        })
        .state('people.eab', {
            url: '/eab',
            templateUrl: 'partials/people/eab.html'
        })
        .state('people.students', {
            url: '/students',
            templateUrl: 'partials/people/students_postdocs.html'
        })
        .state('publications', {
            url: '/publications',
            templateUrl: 'partials/publications/publications.html'
        })
        .state('publications.papers', {
            url: '/papers',
            templateUrl: 'partials/publications/papers.html'
        })
        .state('publications.presentations', {
            url: '/presentations',
            templateUrl: 'partials/publications/presentations.html'
        })
        .state('contact', {
            url: '/contact',
            templateUrl: 'partials/contact/contact.html',
            controller: 'ContactController',
            controllerAs: 'contact'
        });

    $urlRouterProvider.otherwise('/home');
}])

    .controller("HomeController", function ($scope) {
        $scope.date = new Date();
        $scope.viewCircle = function (what) {
            $scope.info = what;
        };
        $scope.$on('home.reset', function() {
            $scope.info = "";
        });
    })
    .controller("NavController", function($scope, $state) {
        $scope.isActive = function(state) {
            return $state.includes(state);
        };
    })

    .controller("PeopleController", function ($scope) {
        $scope.faculty = [
            {
                "title": "Professor ",
                "first_name": "Krishna",
                "last_name": "Garikipati",
                "email": "krishna@umich.edu",
                "research": "http://www-personal.umich.edu/~krishna/",
                "blurb": "Broadly, my research interests are in developing mathematical and computational models of physical systems. With relevance to the PRISMS Center this consists of continuum scale models of coupled mechano-chemical phenomena in materials physics.",
                "advisor": "",
                "image": "assets/img/people/krishna2.jpg"
            },
            {
                "title": "Professor ",
                "first_name": "Vikram",
                "last_name": "Gavini",
                "email": "vikramg@umich.edu",
                "research": "http://www-personal.umich.edu/~vikramg/index.html",
                "blurb": "Developing computational and mathematical tools for electronic structure calculations at macroscopic scales, multi-scale modeling, analysis of approximation theories, electronic structure studies on defects in solids.",
                "advisor": "",
                "image": "assets/img/people/vikramg.jpg"
            },
            {
                "title": "Professor ",
                "first_name": "Katsuyo",
                "last_name": "Thornton",
                "email": "kthorn@umich.edu",
                "research": "http://www.mse.engin.umich.edu/people/faculty/thornton",
                "advisor": "",
                "blurb": "My research focuses on computational and theoretical investigations of the evolution of microstructures and nanostructures during processing and operation. These investigations facilitate the understanding of the underlying physics of materials to aid us in designing advanced materials with desirable properties and in developing manufacturing processes that are the most cost-effective.",
                "image": "assets/img/people/Katsuyo_Thornton.jpg"
            },
            {
                "title": "Professor",
                "first_name": "Anton",
                "last_name": "Van der Ven",
                "email": "avdv@umich.edu",
                "research": "http://www.mse.engin.umich.edu/people/faculty/vanderven",
                "advisor": "",
                "image": "assets/img/people/Anton_Van der Ven.jpg" ,
                "blurb": " I am interested in understanding and predicting equilibrium and non-equilibrium materials properties from first-principles. I combine electronic structure methods (density functional theory) with techniques from statistical mechanics to calculate thermodynamic and kinetic properties of new materials."
            },
            {
                "title": "Professor ",
                "first_name": "Veera",
                "last_name": "Sundararaghavan",
                "email": "veeras@umich.edu",
                "research": "http://umich.edu/~veeras/",
                "advisor": "",
                "image": "assets/img/people/veera2.jpg" ,
                "blurb":"Prof. Sundararaghavan develops multi-scale computational methods for polycrystalline alloys, fiber reinforced composites, metallic foams and ultra-high temperature ceramics to model the effect of microstructure on the overall deformation, fatigue, failure, thermal transport and oxidation response."
            },
            {
                "title": "Dr.",
                "first_name": "Shiva",
                "last_name": "Rudraraju",
                "email": "rudraa@umich.edu",
                "research": "http://www-personal.umich.edu/~rudraa/",
                "advisor": "",
                "image": "assets/img/people/rudraa.jpg" ,
                "blurb": "My current research involves analytical and computational modeling of coupled multiscale phenomena in material physics and biology, spanning mechanics, transport, thermodynamics and phase transitions. Specifically, I am investigating chemo-mechanical coupling of phase transformations involved in battery materials."
            },
            {
                "title": "Dr.",
                "first_name": "Brian",
                "last_name": "Puchala",
                "email": " bpuchala@umich.edu",
                "research": "",
                "advisor": "",
                "image": "assets/img/people/brian.jpg" ,
                "blurb": "My research is focused on computational materials modeling of the thermodynamics and kinetics of solid-state atomistic processes through the development of new automated computational tools. In particular, I am developing Monte Carlo methods which I use for fundamental studies of phase transitions and precipitate formation in metal alloys."
            },
            {
                "title": "Dr.",
                "first_name": "Larry",
                "last_name": "Aagesen",
                "email": "laagesen@umich.edu",
                "research": "",
                "advisor": "",
                "image": "assets/img/people/LarryAagesen.jpg" ,
                "blurb": "My research interests are in the use of theoretical and computational techniques to study the evolution of microstructures and nanostructures during phase transformations, coarsening, and crystal growth, and how evolution by these processes affects material properties. Within the PRISMS Center, I am applying the phase-field method to investigate the formation of precipitates in magnesium alloys, and how interfacial energy, elastic misfit energy, and growth kinetics interact to affect microstructure."
            },
            {
                "title": "Professor ",
                "first_name": "Wayne",
                "last_name": "Jones",
                "email": "jonesjwa@umich.edu",
                "research": "http://www.mse.engin.umich.edu/people/faculty/jones",
                "advisor": "",
                "image": "assets/img/people/J. Wayne_Jones.jpg" ,
                "blurb":"My research area is focused on the mechanical behavior of structural metal alloys and specifically on fatigue and creep. For the past three years my group has been involved in using ultrasonic fatigue to examine the very high cycle fatigue behavior of magnesium, aluminum, and titanium alloys and nickel-base superalloys."
            },
            {
                "title": "Professor ",
                "first_name": "Emmanuelle",
                "last_name": "Marquis",
                "email": "emarq@umich.edu",
                "research": "https://sites.google.com/a/umich.edu/marquisgroup/",
                "advisor": "",
                "image": "assets/img/people/Emmanuelle_Marquis.jpg" ,
                "blurb" : "My research focuses on understanding and quantifying the mechanisms controlling microstructural evolution in alloy systems (including light alloys), interfacial properties, oxidation behavior and irradiation effects in materials. To complement my experimental work, my lab forges close ties to groups in computational and theoretical materials science."
            },
            {
                "title": "Professor ",
                "first_name": "Samantha",
                "last_name": "Daly",
                "email": "samdaly@umich.edu",
                "research": "http://dalylabs.engin.umich.edu",
                "advisor": "",
                "image": "assets/img/people/Samantha_Daly.jpg" ,
                "blurb": "My research lies at the intersection of experimental mechanics and materials science, with an emphasis on using novel methods of experimentation coupled closely with theoretical and computational modeling. My group's research focuses on the measurements of microstructural features of materials and the effect of microstructure on meso and macroscopic properties."
            },
            {
                "title": "Professor ",
                "first_name": "Jagadish",
                "last_name": "H.V.",
                "email": "jag@umich.edu",
                "research": "http://web.eecs.umich.edu/~jag/",
                "advisor": "",
                "image": "assets/img/people/Jag-web.jpg" ,
                "blurb":"My current research is centered around how to make database systems more usable, particularly when the data involved comes from multiple heterogeneous sources, and has undergone many manipulations. A related concern is how to design effective, usable database systems."
            },

            {
                "title": "Professor ",
                "first_name": "Margaret",
                "last_name": "Hedstrom",
                "email": "hedstrom@umich.edu",
                "research": "http://www.si.umich.edu/people/margaret-hedstrom",
                "advisor": "",
                "image": "assets/img/people/hedstrom_margaret_pp_1.jpg" ,
                "blurb":"My research focuses on the reuse of information and the cyberinfrastructure necessary to enable easy exchange of data across disciplines and over time. I am the PI and Project Director for the Open Data IGERT (NSF 0903629) that engages PhD students and faculty at Michigan from Information Science, Computer Science, Materials Science, Chemical Engineering and Bioinformatics in a sustained investigation into the technologies, tools, standards, practices and cultural change."
            }

        ];

        $scope.staff = [
            {
                "title": "  -  Senior Developer",
                "first_name": "Glenn",
                "last_name": "Tarcea",
                "email": "gtarcea@umich.edu",
                "research": "",
                "advisor": "",
                "blurb":"Glenn has been involved with computers since 1988 when he discovered Turbo Pascal. He has worked on projects ranging from student account systems to distributed storage and backup systems. In 2009 Glenn completed his MBA at the University of Michigan's Ross School of Business. ",
                "image": "assets/img/people/glenn_tarcea.jpg"
            },
            {
                "title": "  -  Developer",
                "first_name": "Sravya",
                "last_name": "Tamma",
                "email": "tammasr@umich.edu",
                "research": "",
                "advisor": "",
                "blurb":"Sravya received her Masters Degree in Bioinformatics. Her experience includes developing novel tools to track work flow, experimental stages and results. Currently her work is focused on design and development of web-based work flow management software for Materials Commons.",
                "image": "assets/img/people/sravya_tamma.jpg"
            },
            {
                "title": "  - Administrative Assistant",
                "first_name": "Ellen",
                "last_name": "Kampf",
                "email": "ekampf@umich.edu",
                "research": "",
                "advisor": "",
                "blurb": "",
                "image": "assets/img/people/ellen_kampf.png"
            }
        ];

        $scope.students = [
            {
                "title": "",
                "first_name": "Ellen",
                "last_name": "Sitzmann",
                "email": "esitzmann@gmail.com",
                "research": "",
                "advisor": "Emanuelle Marquis",
                "image": "assets/img/people/Ellen_Sitzmann.png",
                "blurb":"My thesis work focuses on quantifying the effects of alloying elements, aging time, and temperature on the precipitation mechanisms and kinetics in Mg-Rare Earth alloys, using techniques such as transmission electron microscopy and atom probe tomography. Within the collaborative framework of PRISMS, my research will further our understanding of precipitation processes and contribute to a complete thermodynamic and kinetic description of Mg alloys."
            },
            {
                "title": "",
                "first_name": "Jacob",
                "last_name": "Adams",
                "email": "jfadams@umich.edu",
                "research": "",
                "advisor": "John Allison & Wayne Jones",
                "image": "assets/img/people/jfadams.jpg",
                "blurb":"I am studying the very high cycle fatigue behavior and crack propagation mechanisms in magnesium. In the PRISMS program, this work serves to identify critical mechanisms and phenomena necessary for the development of computational models dealing with fatigue crack growth, as well as validating results from computational models as they are developed. "
            },
            {
                "title": "",
                "first_name": "Phani",
                "last_name": "Motamarri",
                "email": "phanim@umich.edu",
                "research": "",
                "advisor": "Vikram Gavini",
                "blurb": "I am involved in the development of an open source code for real-space Kohn-Sham DFT calculations within the computational framework of PRISMS. I intend to use the computational tool developed to study the dislocation properties of Magnesium and its binary alloys using real space Kohn-Sham DFT.",
                "image": "assets/img/people/Phani_Motamarri.jpg"
            },
            {
                "title": "",
                "first_name": "Sambit",
                "last_name": "Das",
                "email": "dsambit@umich.edu",
                "research": "",
                "advisor": "Vikram Gavini",
                "image": "assets/img/people/SambitDas.jpg",
                "blurb":"I am developing a computational framework for explicit large scale electronic structure calculations of crystalline materials using a real space implementation of the Orbital Free Density Functional Theory. My aim is to study the energetics and mobility of edge and screw dislocations in Mg and Al. I also plan to study dislocation-solute interaction in Mg-Al alloys."
            },
            {
                "title": "",
                "first_name": "Sriram",
                "last_name": "Ganesan",
                "email": "sriramg@umich.edu",
                "research": "",
                "advisor": "Veera Sundararaghavan",
                "image": "assets/img/people/Sriram.jpg",
                "blurb":"I am involved in integrating Crystal Plasticity Finite Element Method (CPFEM) into the PRISMS framework. Crystal plasticity methods are used to simulate the response of aggregates of crystals to an applied stress. My current research is focused on developing improved constitutive models which can connect the physics of dislocations with the hardening rates used in CPFEM calculations. "
            },
            {
                "title": "Dr.",
                "first_name": "Jiashi",
                "last_name": "Miao",
                "email": "miaojias@umich.edu",
                "research": "",
                "advisor": "John Allison",
                "image": "assets/img/people/Jiashi.jpg",
                "blurb":"My research focuses on characterization of grain boundary precipitation and grain boundary precipitate-free zone in magnesium alloys. These quantitative characterization results will be used for computational modeling and simulation. "
            },
            {
                "title": "",
                "first_name": "Chia-Hui",
                "last_name": "Hsieh",
                "email": "chiahuih@umich.edu",
                "research": "",
                "advisor": "",
                "image": "assets/img/people/chia.jpg",
                "blurb":"Chia-Hui is a UX/UI designer who is experienced in designing useful, pleasant and engaging user interfaces. She's passionate about understanding users' needs and using design to solve problems and create better user experiences."
            },
            {
                "title": "",
                "first_name": "Huaying",
                "last_name": "Song",
                "email": "huaying@umich.edu",
                "research": "",
                "advisor": "",
                "image": "assets/img/people/iris.jpg",
                "blurb":"Huaying is a UX/UI designer. Her passion lies in creating appealing visuals and smooth user experiences across all touchpoints. She is working on the user experience and web interface design for the PRISMS website and the Materials Commons platform. "
            },
            {
                "title": "",
                "first_name": "Greg",
                "last_name": "Teichert",
                "email": "gregteichert@gmail.edu",
                "research": "",
                "advisor": "Krishna Garikipati",
                "image": "assets/img/people/greg.jpg",
                "blurb":"My work involves modeling continuum elastoplasticity using the finite element method. One standout feature of this project is the integration with crystal plasticity models. This allows the user to extract information from a micro scale crystal plasticity model (such as the hardening curve) and apply it in the macro scale using continuum plasticity."
            },
            {
                "title": "",
                "first_name": "Anirudh Raju",
                "last_name": "Natarajan ",
                "email": "ranirudh@umich.edu@umich.edu",
                "research": "",
                "advisor": "Anton Van der Ven",
                "image": "assets/img/people/Anirudh.jpg",
                "blurb": "My research involves understanding precipitation and kinetics in Magnesium alloys using a combination of first-principles methods and techniques from statistical mechanics. I am also involved in the development of computational tools that will help provide a link between the atomistic and continuum scale."
            },
            {
                "title": "",
                "first_name": "Jason",
                "last_name": "Luce ",
                "email": "jpluce@umich.edu",
                "research": "",
                "advisor": "Katsuyo Thornton",
                "image": "assets/img/people/jason_luce.jpg",
                "blurb": "My research within the PRISMS program focuses on the computational modeling of grain boundary energy and grain boundary dynamics in magnesium alloys. Specifically, I plan to apply the phase field crystal (PFC) model to calculate grain boundary energy as a function of grain misorientation for 2D hexagonal and 3D HCP structures. However, many aspects of the PFC model are still in development, and a large part of my research is centered on using the results of atomistic simulations (e.g., molecular dynamics) to parameterize the PFC model so that it describes physical systems more accurately. "
            },
            {
                "title": "",
                "first_name": "Christian",
                "last_name": "Heinrich",
                "email": "cheinric@umich.edu",
                "research": "",
                "advisor": "Veera Sundararaghavan",
                "image": "assets/img/people/christian.jpg",
                "blurb": "My research is focused on understanding how magnesium fails in the low cycle fatigue regime using a micromechanical approach. Specifically I investigate the creation and evolution of persistent slip bands using dislocation dynamics. The slip bands serve as a point of strain localization and subsequent failure. Tracking the irreversible evolution of dislocations, their accumulation within the slip band and their energetic state will help to predict when fatigue cracks emerge. The evolution of stress, strain and energy will serve as input to crystal elasticity and plasticity models used to investigate the fatigue behavior further on longer time and length scales such as for polycrystals."
            },
            {
                "title": "",
                "first_name": "Aeriel D.",
                "last_name": "Murphy",
                "email": "aerielm@umich.edu",
                "research": "",
                "advisor": "John Allison",
                "image": "assets/img/people/Aeriel.jpg",
                "blurb": "I work on studying recrystallization and grain growth kinetics of Mg and Mg alloys. My work also focuses on understanding low-cycle fatigue behavior of these alloys as it relates to microstructure and alloying additions."
            },
            {
                "title": "",
                "first_name": "Koki",
                "last_name": "Sagiyama",
                "email": "sagiyama@umich.edu",
                "research": "",
                "advisor": "Krishna Garikipati",
                "image": "assets/img/people/koki.jpg",
                "blurb": "My research involves developing integration algorithms for the robust solution of stiff systems of equations that " +
                    "result from the coupling of mechanics and chemistry in problems of evolving microstructure. Specifically, " +
                    "these methods are unconditionally stable and second-order accurate in time, which enables the numerical " +
                    "solution to march more rapidly with respect to time than the conventional, conditionally stable, " +
                    "first-order accurate schemes.These methods are applied to those phenomena of twinning  in Mg that are controlled by the formation of strain-driven martensitic variants."
            }
        ];

        $scope.eab = [
            {
                lastname: "Arsenli",
                display:  "Dr. Tom Arsenlis, Lawrence Livermore National Laboratory"
            },

            {
                lastname: "Foster",
                display: "Professor Ian Foster, University of Chicago & Argonne National Laboratory"
            },

            {
                lastname: "Gumbsch",
                display: "Professor Peter Gumbsch, Karlsruhe Inst of Tech/Franhaufer Institute"
            },

            {
                lastname: "Holm",
                display: "Professor Elizabeth Holm, Carnegie-Mellon University"
            },

            {
                lastname: "Salinger",
                display: "Dr. Andrew Salinger, Sandia National Laboratories – Albuquerque, NM"
            },

            {
                lastname: "Li",
                display: "Dr. Mei Li, Ford Motor Co."
            },

            {
                lastname: "Tome",
                display: "Dr. Carlos Tome’, Los Alamos National Laboratory"
            },

            {
                lastname: "Wells",
                display: "Professor Garth Wells, Cambridge University"
            },

            {
                lastname: "Zimmerman",
                display: "Dr. Jonathan Zimmerman, Sandia National Laboratories – Livermore, CA"
            },
        ];
    })
    .controller('FacultyController', function($scope, $location, $anchorScroll, $stateParams) {
        console.log("$stateParams %O", $stateParams);
        if ($stateParams.who !== '') {
            console.log('going to anchor: ', $stateParams.who);
            $location.hash($stateParams.who);
            $anchorScroll();
        }
    })
    .controller("ContactController", function ($window) {
        var ctrl = this;
        ctrl.name = "";
        ctrl.organization = "";
        ctrl.workshops = null;
        ctrl.computational = null;
        ctrl.materialscommons = null;
        ctrl.expertise = "";
        ctrl.collaborate = "";
        ctrl.submit = submit;
        ctrl.cancel = clear;

        ///////////////////////
        function submit() {
            $window.location = "mailto:prisms-community@umich.edu?subject=PRISMS Community&body=" + escape(constructMessage());
            clear();
        }

        function constructMessage() {
            var msg = "I would like to learn more about PRISMS.\n\n";
            if (ctrl.name !== "") {
                msg += "My name is: " + ctrl.name + "\n";
            }
            if (ctrl.organization !== "") {
                msg += "I work for: " + ctrl.organization + "\n";
            }
            if (ctrl.workshops || ctrl.computation || ctrl.materialscommons) {
                msg += "\nI am interested in:\n";
            }
            if (ctrl.workshops) {
                msg += " - PRISMS Workshops\n";
            }
            if (ctrl.computation) {
                msg += " - PRISMS Computational Software\n";
            }
            if (ctrl.materialscommons) {
                msg += " - Materials Commons\n";
            }
            if (ctrl.expertise) {
                msg += "\nI have expertise in: \n" + ctrl.expertise + "\n";
            }
            if (ctrl.collaborate) {
                msg += "\nI would like to collaborate on: \n" + ctrl.collaborate + "\n";
            }
            return msg;
        }

        function clear() {
            ctrl.name = "";
            ctrl.organization = "";
            ctrl.workshops = null;
            ctrl.computational = null;
            ctrl.materialscommons = null;
            ctrl.expertise = "";
            ctrl.collaborate = "";
        }
    });
