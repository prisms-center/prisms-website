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
            controller: 'PapersController',
            controllerAs: '$ctrl',
            templateUrl: 'partials/publications/papers.html'
        })
        .state('publications.presentations', {
            url: '/presentations',
            controller: 'PresentationsController',
            controllerAs: '$ctrl',
            templateUrl: 'partials/publications/presentations.html'
        })
        .state('workshop', {
            url: '/workshop',
            templateUrl: 'partials/workshop/workshop.html'
        })
        .state('community', {
            url: '/community',
            templateUrl: 'partials/community/community.html',
            controller: 'CommunityController',
            controllerAs: 'community'
        });

    $urlRouterProvider.otherwise('/home');
}])

    .controller('HomeController', function ($scope) {
        $scope.date = new Date();
        $scope.info = 'default';
        $scope.viewCircle = function (what) {
            $scope.info = what;
        };
        $scope.$on('home.reset', function () {
            $scope.info = 'default';
        });
    })
    .controller('NavController', function ($scope, $state) {
        $scope.isActive = function (state) {
            return $state.includes(state);
        };
    })

    .controller('PeopleController', function ($scope) {
        $scope.faculty = [
            // {
            //     "title": "Professor ",
            //     "first_name": "Krishna",
            //     "last_name": "Garikipati",
            //     "email": "krishna@umich.edu",
            //     "research": "http://www-personal.umich.edu/~krishna/",
            //     "blurb": "Broadly, my research interests are in developing mathematical and computational models of physical systems. With relevance to the PRISMS Center this consists of continuum scale models of coupled mechano-chemical phenomena in materials physics.",
            //     "advisor": "",
            //     "image": "assets/img/people/krishna2.jpg"
            // },
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
                "image": "assets/img/people/Anton_Van der Ven.jpg",
                "blurb": " I am interested in understanding and predicting equilibrium and non-equilibrium materials properties from first-principles. I combine electronic structure methods (density functional theory) with techniques from statistical mechanics to calculate thermodynamic and kinetic properties of new materials."
            },
            {
                "title": "Professor ",
                "first_name": "Veera",
                "last_name": "Sundararaghavan",
                "email": "veeras@umich.edu",
                "research": "http://umich.edu/~veeras/",
                "advisor": "",
                "image": "assets/img/people/veera2.jpg",
                "blurb": "Prof. Sundararaghavan develops multi-scale computational methods for polycrystalline alloys, fiber reinforced composites, metallic foams and ultra-high temperature ceramics to model the effect of microstructure on the overall deformation, fatigue, failure, thermal transport and oxidation response."
            },
            // {
            //     "title": "Dr.",
            //     "first_name": "Shiva",
            //     "last_name": "Rudraraju",
            //     "email": "rudraa@umich.edu",
            //     "research": "http://www-personal.umich.edu/~rudraa/",
            //     "advisor": "",
            //     "image": "assets/img/people/rudraa.jpg",
            //     "blurb": "Shiva Rudraraju is a research faculty in Mechanical Engineering and the lead-developer of the finite element based numerical codes under development in PRISMS. His research focuses on coupled multiphysics and multiscale phenomena driven by mechanics (deformation and failure) and transport. Specific topics of research include mechano-chemically driven solid-solid phase transformations, species transport and growth of biological tumors and fracture propagation in fiber reinforced composites. His work draws heavily from continuum mechanics, fracture mechanics, thermodynamics and variational methods."
            // },
            {
                "title": "Dr.",
                "first_name": "Phani",
                "last_name": "Motamarri",
                "email": "phanim@umich.edu",
                "research": "http://www-personal.umich.edu/~phanim/resume.pdf",
                "advisor": "",
                "image": "assets/img/people/Phani_Motamarri.jpg",
                "blurb": "Phani Motamarri is a research faculty in Mechanical Engineering and one of the principal developers of the DFT-FE code. His research focuses on developing mathematical techniques and high-performance computational algorithms for exa-scale density functional theory (DFT) calculations using finite-elements and apply these techniques for ab-initio modeling of defect properties in structural and functional materials. His research is strongly multidisciplinary, drawing ideas from applied mathematics, data science, quantum-mechanics, solid-mechanics, materials science and scientific computing. As a part of PRISMS, dislocation properties of Magnesium and its binary alloys will be studied using real space Kohn-Sham DFT framework (DFT-FE)."
            },
            {
                "title": "Dr.",
                "first_name": "Brian",
                "last_name": "Puchala",
                "email": " bpuchala@umich.edu",
                "research": "",
                "advisor": "",
                "image": "assets/img/people/brian.jpg",
                "blurb": "My research is focused on computational materials modeling of the thermodynamics and kinetics of solid-state atomistic processes through the development of new automated computational tools. In particular, I am developing Monte Carlo methods which I use for fundamental studies of phase transitions and precipitate formation in metal alloys."
            },
            // {
            //     "title": "Dr.",
            //     "first_name": "Stephen",
            //     "last_name": "DeWitt",
            //     "email": "stvdwtt@umich.edu",
            //     "research": "",
            //     "advisor": "",
            //     "image": "assets/img/people/steve.jpg",
            //     "blurb": "My research interests are in developing continuum simulation tools for material systems with complex geometries and then applying them to link microstructural features to macroscopic material properties. As a part of PRISMS I am investigating the formation and evolution of precipitates in magnesium alloys using phase-field simulations and the motion of dislocations past arrays of precipitates using dislocation dynamics simulations."
            // },
            {
                "title": "Dr.",
                "first_name": "Mohammadreza",
                "last_name": "Yaghoobi",
                "email": "yaghoobi@umich.edu",
                "research": "",
                "advisor": "",
                "image": "assets/img/people/reza_yaghoobi.jpg",
                "blurb": "My primary research interest is in multiscale computational plasticity and damage mechanics of crystalline materials, composites, and ceramics with emphasis on the theoretical modeling, numerical simulation of material behavior, and experimental correlation. Research activities of particular interest includes modelling at different length scales including atomistic simulation, crystal plasticity finite element method, and local and nonlocal continuum plasticity. Central to my research is serving as a lead developer of PRISMS-Plasticity software, which is an open-source parallel 3-D crystal plasticity and continuum plasticity finite element code."
            },
            // {
            //     "title": "Professor ",
            //     "first_name": "Wayne",
            //     "last_name": "Jones",
            //     "email": "jonesjwa@umich.edu",
            //     "research": "http://www.mse.engin.umich.edu/people/faculty/jones",
            //     "advisor": "",
            //     "image": "assets/img/people/J. Wayne_Jones.jpg",
            //     "blurb": "My research area is focused on the mechanical behavior of structural metal alloys and specifically on fatigue and creep. For the past three years my group has been involved in using ultrasonic fatigue to examine the very high cycle fatigue behavior of magnesium, aluminum, and titanium alloys and nickel-base superalloys."
            // },
            {
                "title": "Professor ",
                "first_name": "Emmanuelle",
                "last_name": "Marquis",
                "email": "emarq@umich.edu",
                "research": "https://sites.google.com/a/umich.edu/marquisgroup/",
                "advisor": "",
                "image": "assets/img/people/Emmanuelle_Marquis.jpg",
                "blurb": "My research focuses on understanding and quantifying the mechanisms controlling microstructural evolution in alloy systems (including light alloys), interfacial properties, oxidation behavior and irradiation effects in materials. To complement my experimental work, my lab forges close ties to groups in computational and theoretical materials science."
            },
            {
                "title": "Professor ",
                "first_name": "Samantha",
                "last_name": "Daly",
                "email": "samdaly@umich.edu",
                "research": "http://dalylabs.engin.umich.edu",
                "advisor": "",
                "image": "assets/img/people/Samantha_Daly.jpg",
                "blurb": "My research lies at the intersection of experimental mechanics and materials science, with an emphasis on using novel methods of experimentation coupled closely with theoretical and computational modeling. My group's research focuses on the measurements of microstructural features of materials and the effect of microstructure on meso and macroscopic properties."
            },
            // {
            //     "title": "Professor ",
            //     "first_name": "Jagadish",
            //     "last_name": "H.V.",
            //     "email": "jag@umich.edu",
            //     "research": "http://web.eecs.umich.edu/~jag/",
            //     "advisor": "",
            //     "image": "assets/img/people/Jag-web.jpg",
            //     "blurb": "My current research is centered around how to make database systems more usable, particularly when the data involved comes from multiple heterogeneous sources, and has undergone many manipulations. A related concern is how to design effective, usable database systems."
            // },

            {
                "title": "Professor ",
                "first_name": "Margaret",
                "last_name": "Hedstrom",
                "email": "hedstrom@umich.edu",
                "research": "http://www.si.umich.edu/people/margaret-hedstrom",
                "advisor": "",
                "image": "assets/img/people/hedstrom_margaret_pp_1.jpg",
                "blurb": "My research focuses on the reuse of information and the cyberinfrastructure necessary to enable easy exchange of data across disciplines and over time. I am the PI and Project Director for the Open Data IGERT (NSF 0903629) that engages PhD students and faculty at Michigan from Information Science, Computer Science, Materials Science, Chemical Engineering and Bioinformatics in a sustained investigation into the technologies, tools, standards, practices and cultural change."
            },
            {
                title: "Dr. ",
                first_name: "David",
                last_name: "Montiel",
                email: "dmontiel@umich.edu",
                research: "",
                advisor: "",
                image: "assets/img/people/david_montiel.png",
                blurb: "My research is focused on the development and application of phase-field and phase-field-crystal models to simulate the dynamics of nano- and microstructures during materials processing and operation. The goal of this work is to better understand the underlying mechanisms that give rise to different microstructures, and then apply this knowledge to design materials with targeted properties. Specific topics of my research include precipitate nucleation and growth, the study three-dimensional effects in two-dimensional materials, and the effect of microstructure on corrosion behavior.",
            },
            // {
            //     title: "",
            //     first_name: "",
            //     last_name: "",
            //     email: "",
            //     research: "",
            //     advisor: "",
            //     image: "",
            //     blurb: "",
            // },
            // {
            //     title: "",
            //     first_name: "",
            //     last_name: "",
            //     email: "",
            //     research: "",
            //     advisor: "",
            //     image: "",
            //     blurb: "",
            // }


        ];

        $scope.staff = [
            {
                'title': '  -  Senior Developer',
                'first_name': 'Glenn',
                'last_name': 'Tarcea',
                'email': 'gtarcea@umich.edu',
                'research': '',
                'advisor': '',
                'blurb': 'Glenn has been involved with computers since 1988 when he discovered Turbo Pascal. He has worked on projects ranging from student account systems to distributed storage and backup systems. In 2009 Glenn completed his MBA at the University of Michigan\'s Ross School of Business. ',
                'image': 'assets/img/people/glenn_tarcea.jpg'
            },
            //{
            //    "title": "  -  Developer",
            //    "first_name": "Sravya",
            //    "last_name": "Tamma",
            //    "email": "tammasr@umich.edu",
            //    "research": "",
            //    "advisor": "",
            //    "blurb": "Sravya received her Masters Degree in Bioinformatics. Her experience includes developing novel tools to track work flow, experimental stages and results. Currently her work is focused on design and development of web-based work flow management software for Materials Commons.",
            //    "image": "assets/img/people/sravya_tamma.jpg"
            //},
            {
                'title': '  - Administrative Assistant',
                'first_name': 'Ellen',
                'last_name': 'Kampf',
                'email': 'ekampf@umich.edu',
                'research': '',
                'advisor': '',
                'blurb': '',
                'image': 'assets/img/people/ellen_kampf.png'
            }
        ];

        $scope.students = [
            {
                "title": "",
                "first_name": "Sambit",
                "last_name": "Das",
                "email": "dsambit@umich.edu",
                "research": "",
                "advisor": "Vikram Gavini",
                "image": "assets/img/people/SambitDas.jpg",
                "blurb": "I am developing a computational framework for explicit large scale electronic structure calculations of crystalline materials using a real space implementation of the Orbital Free Density Functional Theory. My aim is to study the energetics and mobility of edge and screw dislocations in Mg and Al. I also plan to study dislocation-solute interaction in Mg-Al alloys. I am also the lead-developer of DFT-FE code for conducting large-scale Kohn-Sham DFT calculations."
            },


            //{
            //    "title": "Dr.",
            //    "first_name": "Jiashi",
            //    "last_name": "Miao",
            //    "email": "miaojias@umich.edu",
            //    "research": "",
            //    "advisor": "John Allison",
            //    "image": "assets/img/people/Jiashi.jpg",
            //    "blurb": "My research focuses on characterization of grain boundary precipitation and grain boundary precipitate-free zone in magnesium alloys. These quantitative characterization results will be used for computational modeling and simulation. "
            //},

            //{
            //    "title": "",
            //    "first_name": "Chia-Hui",
            //    "last_name": "Hsieh",
            //    "email": "chiahuih@umich.edu",
            //    "research": "",
            //    "advisor": "",
            //    "image": "assets/img/people/chia.jpg",
            //    "blurb": "Chia-Hui is a UX/UI designer who is experienced in designing useful, pleasant and engaging user interfaces. She's passionate about understanding users' needs and using design to solve problems and create better user experiences."
            //},
            //{
            //    "title": "",
            //    "first_name": "Huaying",
            //    "last_name": "Song",
            //    "email": "huaying@umich.edu",
            //    "research": "",
            //    "advisor": "",
            //    "image": "assets/img/people/iris.jpg",
            //    "blurb": "Huaying is a UX/UI designer. Her passion lies in creating appealing visuals and smooth user experiences across all touchpoints. She is working on the user experience and web interface design for the PRISMS website and the Materials Commons platform. "
            //},


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
                "first_name": "Aaditya",
                "last_name": "Lakshmanan",
                "email": "aadityal@umich.edu",
                "research": "",
                "advisor": "Veera Sundararaghavan ",
                "image": "",
                "blurb": "I work on multiple approaches to capture microstructural length-scale effects in crystal plasticity constitutive models. This includes simple phenomenological Hall-Petch type models whose constitutive parameters are obtained by fitting experimental measurements of the stress profile ahead of a blocked slip band with a theoretical continuum dislocation pileup model. Recent efforts involve developing dislocation-density based models tied to the continuum crystal plasticity framework which naturally depict size-effect and other intragranular microstructural features. The applications of such an approach to Magnesium alloys is of paramount importance in the Aerospace industry and their science is yet to be uncovered."
            },

            {
                "title": "",
                "first_name": "Mohsen Taheri",
                "last_name": "Andani",
                "email": "mtaheri@umich.edu",
                "research": "",
                "advisor": "Amit Misra",
                "image": "assets/img/people/mohsen_taherai_andani.jpg",
                "blurb": "I am studying the role of grain boundaries in yield strength of the Magnesium alloys. In the PRISMS program, this work serves to identify critical mechanisms and phenomena necessary for the development of computational models dealing with grain boundary strengthening, as well as validating results from computational models as they are developed."
            },

            {
                "title": "",
                "first_name": "Duncan",
                "last_name": "Greeley",
                "email": "greeleyd@umich.edu",
                "research": "",
                "advisor": "John Allison",
                "image": "assets/img/people/duncan_greeley.jpg",
                "blurb": "Duncan is a graduate student in the Allison Research Group studying fatigue deformation and short crack growth in Magnesium-Rare-Earth alloys, using synchrotron High Energy X-Ray Diffraction Microscopy to characterize the crystallography of fatigue crack paths and in-situ cyclic micromechanical behavior.",
            },

            // TODO
            // {
            //     "title": "",
            //     "first_name": "Choaming",
            //     "last_name": "Yang",
            //     "email": "",
            //     "research": "",
            //     "advisor": "",
            //     "image": "",
            //     "blurb": "",
            // },

            // TODO
            // {
            //     "title": "",
            //     "first_name": "Srihari",
            //     "last_name": "Sundar",
            //     "email": "",
            //     "research": "",
            //     "advisor": "",
            //     "image": "",
            //     "blurb": "",
            // },
        ];

        $scope.post_docs = [
            {
                "title": "Dr.",
                "first_name": "John",
                "last_name": "C Thomas",
                "email": "johnct@umich.edu",
                "research": "",
                "advisor": "Anton Van der Ven",
                "image": "assets/img/people/thomas.jpg",
                "blurb": "My research utilizes predictive simulation to study and optimize finite-temperature properties of crystalline materials. I develop methods that leverage first-principles datasets to build atomistic and mesoscale models describing chemical, mechanical, and lattice-dynamical phenomena. My interests span new and yet-to-be-discovered materials for structural applications, thermoelectricity, optoelectronic devices, and energy storage."
            },
            {
                "title": "Dr.",
                "first_name": "Anirudh Raju",
                "last_name": "Natarajan ",
                "email": "ranirudh@umich.edu@umich.edu",
                "research": "",
                "advisor": "Anton Van der Ven",
                "image": "assets/img/people/Anirudh.jpg",
                "blurb": "My research involves understanding precipitation and kinetics in Magnesium alloys using a combination of first-principles methods and techniques from statistical mechanics. I am also involved in the development of computational tools that will help provide a link between the atomistic and continuum scale."
            },

            // TODO
            // {
            //     "title": "Dr.",
            //     "first_name": "John",
            //     "last_name": "Goiri",
            //     "email": "",
            //     "research": "",
            //     "advisor": "",
            //     "image": "",
            //     "blurb": "",
            // },

            // TODO
            // {
            //     "title": "Dr.",
            //     "first_name": "Zhe",
            //     "last_name": "Chen",
            //     "email": "",
            //     "research": "",
            //     "advisor": "",
            //     "image": "",
            //     "blurb": "",
            // },

            {
                "title": "Dr.",
                "first_name": "Quianying",
                "last_name": "Shi",
                "email": "shiqiany@umich.edu",
                "research": "",
                "advisor": "",
                "image": "assets/img/people/qianying_shi.jpg",
                "blurb": "My research focuses on microstructural characterization and property evaluation of metallic materials, especially precipitation strengthened lightweight alloys, for the development of integrated computational materials engineering approach to predict and optimize the alloy performance. I conduct quantitative nano-scaled microstructural analysis using advanced characterization tools such as transmission electron microscopy, high resolution scanning transmission electron microscopy and atomic probe tomography. Experimental results are coupled with CALPHAD simulation to achieve thermodynamic and kinetic modeling for microstructure evolution during different processing steps and furthermore to build the strength prediction model.",
            },
        ];

        $scope.former_students = [
            {
                "title": "",
                "first_name": "Ellen",
                "last_name": "Sitzmann",
                "email": "esitzmann@gmail.com",
                "research": "",
                "advisor": "Emanuelle Marquis",
                "image": "assets/img/people/Ellen_Sitzmann.png",
                "blurb": "My thesis work focuses on quantifying the effects of alloying elements, aging time, and temperature on the precipitation mechanisms and kinetics in Mg-Rare Earth alloys, using techniques such as transmission electron microscopy and atom probe tomography. Within the collaborative framework of PRISMS, my research will further our understanding of precipitation processes and contribute to a complete thermodynamic and kinetic description of Mg alloys."
            },
            {
                "title": "",
                "first_name": "Jacob",
                "last_name": "Adams",
                "email": "jfadams@umich.edu",
                "research": "",
                "advisor": "John Allison & Wayne Jones",
                "image": "assets/img/people/jfadams.jpg",
                "blurb": "I am studying the very high cycle fatigue behavior and crack propagation mechanisms in magnesium. In the PRISMS program, this work serves to identify critical mechanisms and phenomena necessary for the development of computational models dealing with fatigue crack growth, as well as validating results from computational models as they are developed. "
            },
            {
                "title": "",
                "first_name": "Sriram",
                "last_name": "Ganesan",
                "email": "sriramg@umich.edu",
                "research": "",
                "advisor": "Veera Sundararaghavan",
                "image": "assets/img/people/Sriram.jpg",
                "blurb": "I am involved in integrating Crystal Plasticity Finite Element Method (CPFEM) into the PRISMS framework. Crystal plasticity methods are used to simulate the response of aggregates of crystals to an applied stress. My current research is focused on developing improved constitutive models which can connect the physics of dislocations with the hardening rates used in CPFEM calculations. "
            },
            {
                "title": "",
                "first_name": "Greg",
                "last_name": "Teichert",
                "email": "gregteichert@gmail.edu",
                "research": "",
                "advisor": "Krishna Garikipati",
                "image": "assets/img/people/greg.jpg",
                "blurb": "My work involves modeling continuum elastoplasticity using the finite element method. One standout feature of this project is the integration with crystal plasticity models. This allows the user to extract information from a micro scale crystal plasticity model (such as the hardening curve) and apply it in the macro scale using continuum plasticity."
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
            },
            {
                "title": "",
                "first_name": "Shardul",
                "last_name": "Panwar",
                "email": "sspanwar@umich.edu",
                "research": "",
                "advisor": "Veera Sundararaghavan",
                "image": "assets/img/people/ShardulPanwar.jpg",
                "blurb": "My research involves developing computational models based on crystal plasticity for predicting micro-scale fatigue crack propagation . The major part of my research focuses on new ways to make fatigue computation less expensive, by using theoretical models and experimental data for determining cohesive law parameters to be used in micro-structural fatigue simulations."
            },
            // TODO
            // {
            //     "title": "",
            //     "first_name": "Ransom",
            //     "last_name": "Stamps",
            //     "email": "",
            //     "research": "",
            //     "advisor": "",
            //     "image": "",
            //     "blurb": "",
            // },

            // TODO
            // {
            //     "title": "",
            //     "first_name": "Beck",
            //     "last_name": "Andrews",
            //     "email": "",
            //     "research": "",
            //     "advisor": "",
            //     "image": "",
            //     "blurb": "",
            // },

            // TODO
            // {
            //     "title": "",
            //     "first_name": "Zhihua",
            //     "last_name": "Huang",
            //     "email": "",
            //     "research": "",
            //     "advisor": "",
            //     "image": "",
            //     "blurb": "",
            // },
        ];

        $scope.eab = [
            {
                lastname: 'Arsenli',
                display: 'Dr. Tom Arsenlis, Lawrence Livermore National Laboratory'
            },

            {
                lastname: 'Foster',
                display: 'Professor Ian Foster, University of Chicago & Argonne National Laboratory'
            },

            {
                lastname: 'Gumbsch',
                display: 'Professor Peter Gumbsch, Karlsruhe Inst of Tech/Franhaufer Institute'
            },

            {
                lastname: 'Holm',
                display: 'Professor Elizabeth Holm, Carnegie-Mellon University'
            },

            {
                lastname: 'Salinger',
                display: 'Dr. Andrew Salinger, Sandia National Laboratories – Albuquerque, NM'
            },

            {
                lastname: 'Li',
                display: 'Dr. Mei Li, Ford Motor Co.'
            },

            {
                lastname: 'Tome',
                display: 'Dr. Carlos Tome’, Los Alamos National Laboratory'
            },

            {
                lastname: 'Wells',
                display: 'Professor Garth Wells, Cambridge University'
            },

            {
                lastname: 'Zimmerman',
                display: 'Dr. Jonathan Zimmerman, Sandia National Laboratories – Livermore, CA'
            }
        ];
    })
    .controller('FacultyController', function ($scope, $location, $anchorScroll, $stateParams) {
        console.log('$stateParams %O', $stateParams);
        if ($stateParams.who !== '') {
            console.log('going to anchor: ', $stateParams.who);
            $location.hash($stateParams.who);
            $anchorScroll();
        }
    })
    .controller('CommunityController', function ($window) {
        var ctrl = this;
        ctrl.name = '';
        ctrl.organization = '';
        ctrl.workshops = null;
        ctrl.computational = null;
        ctrl.materialscommons = null;
        ctrl.expertise = '';
        ctrl.collaborate = '';
        ctrl.submit = submit;
        ctrl.cancel = clear;

        ///////////////////////
        function submit() {
            $window.location = 'mailto:prisms-community@umich.edu?subject=PRISMS Community&body=' + escape(constructMessage());
            clear();
        }

        function constructMessage() {
            var msg = 'I would like to learn more about PRISMS.\n\n';
            if (ctrl.name !== '') {
                msg += 'My name is: ' + ctrl.name + '\n';
            }
            if (ctrl.organization !== '') {
                msg += 'I work for: ' + ctrl.organization + '\n';
            }
            if (ctrl.workshops || ctrl.computation || ctrl.materialscommons) {
                msg += '\nI am interested in:\n';
            }
            if (ctrl.workshops) {
                msg += ' - PRISMS Workshops\n';
            }
            if (ctrl.computation) {
                msg += ' - PRISMS Computational Software\n';
            }
            if (ctrl.materialscommons) {
                msg += ' - Materials Commons\n';
            }
            if (ctrl.expertise) {
                msg += '\nI have expertise in: \n' + ctrl.expertise + '\n';
            }
            if (ctrl.collaborate) {
                msg += '\nI would like to collaborate on: \n' + ctrl.collaborate + '\n';
            }
            return msg;
        }

        function clear() {
            ctrl.name = '';
            ctrl.organization = '';
            ctrl.workshops = null;
            ctrl.computational = null;
            ctrl.materialscommons = null;
            ctrl.expertise = '';
            ctrl.collaborate = '';
        }
    })
    .controller('PapersController', function () {
        var ctrl = this;

        function makePaper(authors, title, details) {
            return {
                title: title,
                authors: authors,
                details: details
            };
        }

        ctrl.papers = [
            // 2019
            makePaper('E. L.S. Solomon, A. R. Natarajan, A. Roy, V. Sundararaghavan, A. Van der Ven, E. A. Marquis',
                'Stability and strain-driven evolution of β\' precipitation in Mg-Y alloys',
                'Acta Materialia, 166 (2019) 148-157. https://doi.org/10.1016/j.actamat.2018.12.026'),

            makePaper(
                'Aeriel D. Leonard-Murphy, Darren C. Pagan, Armand Beaudoin, Matthew P. Miller, John E. Allison',
                'Quantification of Twinning-Detwinning Behavior During Low-Cycle Fatigue of Pure Magnesium Using High Energy X-Ray Diffraction',
                'International Journal of Fatigue, 125 (2019) 314-323.  https://doi.org/10.1016/j.ijfatigue.2019.04.011'
            ),
            makePaper(
                'Zhihua Huang, Chaoming Yang, Liang Qi, John E. Allison, Amit Misra',
                'Dislocation pile-ups at β1 precipitate interfaces in Mg-rare earth (RE) alloys',
                'Materials Science and Engineering A, 742 (2019) 278-286. https://doi.org/10.1016/j.msea.2018.10.104'
            ),
            makePaper(
                'P. Acar, V. Sundararaghavan',
                'Stochastic Design Optimization of Microstructural Features using Linear Programming for Robust Material Design',
                'AIAA Journal,Vol. 57(1), 2019. DOI: 10.2514/1.J057377'
            ),
            makePaper(
                'P. Acar, V. Sundararaghavan',
                'Do Epistemic Uncertainties Allow for Replacing Microstructural Experiments with Reconstruction Algorithms?',
                'AIAA Journal, 57(3), 1078-1091, 2019. DOI: 10.2514/1.J057488'
            ),
            makePaper(
                'Mohammadreza Yaghoobi, Sriram Ganesan, Srihari Sundar, Aaditya Lakshmanan, Shiva Rudraraju, John E. Allison, Veera Sundararaghavan',
                'PRISMS-Plasticity: An open-source crystal plasticity finite element software',
                'Computational Materials Science, 169, 109078, 2019.'
            ),
            makePaper(
                'D. Greeley, M. Yaghoobi, D. Pagan, V. Sundararaghavan and J. Allison',
                'Using Synchrotron radiation to improve understanding of deformation of polycrystalline metals by measuring, modeling and publishing 4D information',
                'Metal Microstructures in 2D, 3D and 4D, 407h Riso International Symposium on Materials Science, Technical University of Denmark, 2019.'
            ),
            makePaper(
                'A. R. Natarajan and A. Van der Ven',
                'Toward an Understanding of Deformation Mechanisms in Metalllic Litium and Sodium from First Principles',
                'Chemistry of Materials, 31, 8222-8229, 2019'
            ),
            makePaper(
                'Phani Motamarri, Sambit Das, Shiva Rudraraju, Krishnendu Ghosh, Denis Davydov, Vikram Gavini',
                'DFT-FE – a massively parallel adaptiave finite-element code for large-scale density functional calculations',
                'Computer Physics Communications., 2019'
            ),
            makePaper(
                'Das, S., Motamarri, P., Gavini, V., Turcksin, B., Li, Y.W., Leback, B.',
                'Fast, scalable & accurate finite-element based ab initio calculations using mixed precision computing: 40 PFLOPS simulation of a metallic dislocation system',
                'The International Conference for High Performance Computing Networking, Storage,and Analysis, 2019 (ACM Gordon Bell Prize nomination).'
            ),
            makePaper(
                'D. Wheeler, T. Keller, S. DeWitt, A.M. Jokisaari, D. Schwen, J.E. Guyer, L. Aagesen, O.G. Heinonen, M.R. Tonks, P.W. Voorhees, J.A. Warren',
                'PFHub – The Phase Field Community Hub',
                'Journal of Open Research Software, 2019'
            ),
            makePaper(
                'S. DeWitt, S. Rudraraju, D. Montiel, W.B. Andrews, K. Thornton',
                'PRISMS-PF: A General Framework for Phase-Field Modeling Employing a Matrix-Free Finite Element Method',
                'in final review with npj Computational Materials (2019)'
            ),
            makePaper(
                'A. Githens, S. Ganesan, Z. Chen, J. Allison, V. Sundararaghavan, S. Daly',
                'Characterizing Microscale Deformation Mechanisms and Macroscopic Tensile Properties of a High Strength Magnesium Rare-Earth Alloy: A Combined Experimental and Crystal Plasticity Approach',
                'in Acta Materialia, 2019'
            ),
            makePaper(
                'A. Leonard-Murpy and J. E. Allison',
                'The Influence of Grain Size and Alloying on Cyclic-Stress-Strain and Low Cycle Fatigue Behavior in Unalloyed Mg',
                'in International Journal of Fatigue, 2019'
            ),
            makePaper(
                'M. Yaghoobi, J.E. Allison, V. Sundararaghavan',
                'Multiscale modeling of twinning and detwinning behavior of HCP polycrystals',
                'International Journal of Plasticity, 2019'
            ),

            // 2018
            makePaper(
                'S. DeWitt and K. Thornton',
                'Phase Field Modeling of Microstructural Evolution” Computational Materials System Design',
                'D. Shin and J. Saal, Eds., Springer Nature, London, (2018)'
            ),
            makePaper(
                'L.K. Aagesen, J. Miao, J. E. Allison, S. Aubry, A. Arsenlis',
                'Prediction of Precipitation Strengthening in the Commercial Mg Alloy AZ91 Using Dislocation Dynamics',
                'Metallurgical and Materials Trans.Vol 49 (5) pp. 1908-1915 (2018).'
            ),
            makePaper(
                'Aeriel D. Murphy and John E. Allison',
                'The Recrystallization Behavior of Unalloyed Mg and a Mg-Al Alloy',
                'Metallurgical and Materials Transactions, Vol 49 (5) 1492-1508 (2018)'
            ),
            makePaper(
                'Zhihua Huang, John E. Allison and Amit Misra',
                'Interaction of Glide Dislocations with Extended Precipitates in Mg-Nd alloys',
                'Scientific Reports, Article number: 3570 (2018).'
            ),
            makePaper(
                'J. Luo, A. Ramazani, V. Sundararaghavan',
                'Simulation of Micro-Scale Shear Bands Using Peridynamics with an Adaptive Dynamic Relaxation Method',
                'International Journal of Solids and Structures, 130, pp.36-48, 2018.'
            ),
            makePaper(
                'S. Panwar, J. Adams, J. Allison, J. W. Jones, V. Sundararaghavan',
                'A grain boundary interaction model for microstructurally short fatigue cracks',
                'International Journal of Fatigue Volume 113, pp 401-406 (2018).'
            ),
            makePaper(
                'P. Motamarri, V. Gavini',
                'Configurational forces in electronic structure calculations using Kohn Sham density functional theory',
                'Physical Review B (2018) 97, 165132 (2018)'
            ),
            makePaper(
                'L. K. Aaegesen, J. F. Adams, J. E. Allison, B. Andrews, V. Araullo-Peters, T. Berman, Z. Chen, S. Daly, S. Das, S. DeWitt, S. Ganesan, K. Garikipati, V. Gavini, A. Githens, M. Hedstrom, Z. Huang, H.V. Jagadish, J.W. Jones, J. Luce, E.A. Marquis, A. Misra, D. Montiel, P. Motamarri, A. D. Murphy, A. R. Natarajan, S. Panwar, B. Puchala, L. Qi, S. Rudraraju, K. Sagiyama, E.L.S. Solomon, V. Sundararaghavan, G. Tarcea, G. H. Teichert, J. C. Thomas, K. Thornton, A. Van der Ven, Z. Wang, T. Weymouth, C. Yang.',
                'PRISMS - An Integrated, Open Source Framework for Accelerating Predictive Structural Materials Science',
                'JOM.(2018) October, p 1-17. https://doi.org/10.1007/s11837-018-3079-6'
            ),
            makePaper(
                'J. Luo, V. Sundararaghavan',
                'Stress point method for stabilizing zero energy modes in non- ordinary state based peridynamics',
                'International Journal of Solids and Structures Volume 150, Pages 197-207, 2018. DOI: 10.1016/j.ijsolstr.2018.06.015'
            ),
            makePaper(
                'A Van der Ven, JC Thomas, B Puchala, AR Natarajan',
                'First-principles statistical mechanics of multicomponent crystals',
                'Annual Review of Materials Research 48, 27-55 (2018)'
            ),
            makePaper(
                'W. Lenthe, JC Stinville, M Echlin, Z Chen, S Daly, T Pollock',
                'Advanced Detector Signal Acquisition and Electron Beam Scanning for High Resolution SEM Imaging',
                'Ultramicroscopy, 195, 193-100, 2018.'
            ),
            makePaper(
                'Chen Z, Lenthe W., Stinville J.C., Echlin M., Pollock T., Daly S.',
                'High-Resolution Deformation Mapping Across Large Fields of View Using Scanning Electron Microscopy and Digital Image Correlation.',
                'Experimental Mechanics,58(9): 1407-1421, 2018.'
            ),
            makePaper(
                'Chen Z. and Daly S. Daly S.',
                'Deformation Twin Identification in Magnesium through Clustering and Computer Vision.',
                'Materials Science and Engineering A, 736: 61-75, 2018.'
            ),

            // 2017
            makePaper(
                'P. Acar, V. Sundararaghavan',
                'Uncertainty Quantification of Microstructural Properties due to Variability in Measured Pole Figures',
                'Acta Materialia, v. 124, p. 100-108, 2017'
            ),
            makePaper(
                'P. Acar, V. Sundararaghavan',
                'Uncertainty Quantification of Microstructural Properties due to Experimental Variations',
                'AIAA Journal, Vol. 55, No. 8 (2017), pp. 2824-2832'
            ),
            makePaper(
                'E. Solomon, V. Araullo-Peters, J.E. Allison, E.A. Marquis',
                'Early precipitate morphologies in a Mg-Nd-(Zr) Alloys.',
                'Scripta Materialia 128;14-17 (2017)'
            ),
            makePaper(
                'G. H. Teichert, N. S. H. Gunda, S. Rudraraju, A. R. Natarajan, B. Puchala, K. Garikipati, A. Van der Ven',
                'A comparison of Redlich-Kister polynomial and cubic spline representations of the chemical potential in phase field computations',
                'Comp. Mater. Sci. 128, (2017) 127-139.'
            ),
            makePaper(
                'C. Heinrich, V. Sundaraghavan',
                'A method to predict fatigue crack initiation in metals using dislocation dynamics',
                'Corrosion Reviews, 35 (4-5) pp 325-341(2017).',
            ),
            makePaper(
                'A. R. Natarajan, A. Van der Ven',
                'A unified description of ordering in HCP Mg-RE alloys',
                'Acta materialia, 124, p620-632, (2017).'
            ),
            makePaper(
                'S. DeWitt, E. Solomon, A. Natarajan, V. Araullo-Peters, S. Rudraraju, L. Aagesen, E. Marquis, A. van der Ven, K. Thornton, and J. Allison',
                'Misfit-Driven  Precipitate Composition and Morphology in Mg-Nd Alloys',
                'Acta Mat. (2017) 136, 378-389, 2017.'
            ),
            makePaper(
                'E. Solomon, T. Chan, A Chen, B Uttal-Veroff, E. Marquis',
                'Aging behavior of Mg alloys containing Nd and Y” Magnesium Technology.',
                '(2017) 349-352'
            ),
            makePaper(
                'P. Acar, S. Srivastava, V. Sundararaghavan',
                'Stochastic Design Optimization of Microstructures with Utilization of a Linear Solver',
                'AIAA Journal, Vol. 55 (9) pp. 3161-3168 (2017).'
            ),
            makePaper(
                'A. R. Natarajan, A. Van der Ven',
                'First principles investigation of phase stability in the Mg-Sc binary alloy',
                'Physical Review B, (2017).'
            ),
            makePaper(
                'A. R. Natarajan, A. Van der Ven',
                'First principles investigation of phase stability in the Mg-Sc binary alloy',
                'Physical Review B, (2017).'
            ),
            makePaper(
                'Z. Wang, J. Siegel, K. Garikipati',
                'Intercalation driven porosity effects on the electro-chemo-thermo-mechanical response in continuum models for battery material electrodes',
                'Journal of the Electrochemical Society, 164, A2199-A2212, 2017.'
            ),
            makePaper(
                'K. Sagiyama, S. Rudraraju, K. Garikipati',
                'A numerical study of branching and stability of solutions to three-dimensional martensitic phase transformations using gradient-regularized, non-convex, finite strain elasticity',
                'Journal of the Mechanics and Physics of Solids,(2017).'
            ),
            makePaper(
                'ELS Solomon, EA Marquis',
                'Deformation behavior of β’ and β”’ precipitates in Mg-RE alloys',
                'Materials Letters (2017) 216(1) 67-69'
            ),
            makePaper(
                'P-W Chu, E LeMire, EA Marquis',
                'Microstructure of Localized Corrosion Front on Mg Alloys and the Relationship with Anodic Hydrogen Evolution',
                'Corrosion Science (2017) 128 253-264'
            ),
            makePaper(
                'Das, S., Gavini, V.',
                'Electronic structure study of screw dislocation core energetics in Aluminum and core energetics informed forces in a dislocation aggregate',
                'J. Mech. Phys. Solids, 104, 115-143 (2017).'
            ),
            makePaper(
                'Shardul Panwar and Veera Sundararaghavan',
                'Dislocation theory-based cohesive model for microstructually short fatigue crack growth',
                'Materials Science and Engineering A, 708, pp 395-404 (2017).'
            ),
            makePaper(
                'A. Natarajan, J. Thomas, B. Puchala, A Van der Ven',
                'Symmetry-adapted order parameters and free energies for solids undergoing order-disorder phase transitions',
                'Phys Rev B, 96 134204 (2017)'
            ),
            makePaper(
                'S. Sun, A. Ramazani, V. Sundararaghavan',
                'A hybrid multi-scale model of crystal plasticity for handling stress concentrations',
                'Metals, 7(9), 345, 2017.'
            ),
            makePaper(
                'P. Acar, A. Ramazani, V. Sundararaghavan',
                'Crystal Plasticity Modeling and Experimental Validation with an Orientation Distribution Function for Ti-7Al Alloy',
                'Metals, 7(11), p.459, 2017.'
            ),

            //2016
            makePaper(
                'A. Natarajan, E. Solomon, B. Puchala, E. Marquis, A. Van der Ven',
                'On the precipitation sequence in dilute Mg-Nd alloys',
                'Acta Mat, 108, 367-379 (2016).'
            ),
            makePaper(
                'E. Solomon, E.A. Marquis',
                'The structure of ß” and ß’ in an Aged Mg‐Nd Alloy',
                'Magnesium Technology. 151-154 (2016)'
            ),
            makePaper(
                'S. Sun and V. Sundararaghavan',
                'Modeling crack propagation in polycrystalline microstructure using variational multi-scale method',
                'Mathematical Problems in Engineering Volume 2016, Article ID 4715696, 14 pages, (2016).'
            ),
            makePaper(
                'S. Rudraraju, A. Van der Ven, K. Garikipati',
                'Mechano-chemical spinodal decomposition: A phenomenological theory of phase transformations in multi-component, crystalline solids',
                'Nature Computational Materials, 2, 16012 (2016). doi:10.1038/npjcompumats.2016.12'
            ),
            makePaper(
                'B. Puchala, G. Tarcea, E. A. Marquis, M. Hedstrom, H. V. Jagadish and J. E. Allison',
                'The Materials Commons: A collaboration platform and information repository for the global materials community',
                'JOM, 68, 2035-44,  2016.'
            ),
            makePaper(
                'Z. Wang, S. Rudraraju, K. Garikipati',
                'A three dimensional field formulation, and isogeometric solutions to point and line defects using Toupin’s theory of gradient elasticity at finite strains',
                'Journal of the Mechanics and Physics of Solids, 94, 336-361 (2016). doi:10.1016/j.jmps.2016.03.028'
            ),
            makePaper(
                'P. Acar, V. Sundararaghavan',
                'A linear solution scheme for microstructure design with process constraints',
                'AIAA Journal, 54(12), pp. 4022-4031 (2016).'
            ),
            makePaper(
                'J. Adams, J. Allison, J. W. Jones',
                'The effects of heat treatment on very high cycle fatigue behavior in hot-rolled WE43 magnesium',
                'International Journal of Fatigue, 93 (2) 372-386, 2016.'
            ),
            makePaper(
                'K. Sagiyama, S. Rudraraju, K. Garikipati',
                'Unconditionally stable, second-order accurate schemes for solid state phase transformations driven by mechano-chemical spinodal decomposition',
                'Computer Methods in Applied Mechanics and Engineering, 311, 556-575 (2016). doi: 10.1016/j.cma.2016.09.003'
            ),
            makePaper(
                'S. Panwar, S. Sun, V. Sundararaghavan',
                'Modeling fatigue failure using variational multiscale method',
                'Engineering Fracture Mechanics, 162, p. 290-308, 2016'
            ),
            makePaper(
                'T. Jiang, A. Roy, S. Rudraraju, A. Van der Ven, K. Garikipati, M. Falk',
                'A multi-physics study of lithium ion battery electrode Li1+xT2O4',
                'Journal of Chemical Physics C, 120, 27871-27881 (2016). doi:10.1021/acs.jpcc.6b09775'
            ),
            makePaper(
                'G. Teichert, S. Rudraraju, K. Garikipati',
                'A variational treatment of interface motion and microstructural change as problems of evolving configurations',
                'Journal of the Mechanics and Physics of Solids, 99, 338-356 (2016). doi:10.1016/j.jmps.2016.11.008'
            ),
            makePaper(),

            // 2015
            makePaper(
                'M. Iyer, B. Radhakrishnan, V. Gavini',
                'Electronic structure study of an edge dislocation in aluminum and the role of macroscopic deformations on its energetics',
                'J. Mech. Phys. Solids  76 (2015) 260-275.'
            ),
            makePaper(
                'E. Sitzmann and E. A. Marquis',
                'Chemistry and morphology of B\' precipitates in an aged Mg-Nd-Y-Zr alloy',
                '95(1) 7-13, Philosophical Magazine Letters, (2015).'
            ),
            makePaper(
                'Sambit Das, Mrinal Iyer, Vikram Gavini',
                'Real-space formulation of orbital-free density functional theory using finite-element discretization: The case for Al, Mg, and Al-Mg intermetallics',
                'Phys. Rev. B 92, 014104 (2015).'
            ),

            // 2014
            makePaper(
                'S. Rudraraju, A. Van der Ven and K. Garikipati',
                'Three-dimensional iso-geometric solutions to general boundary value problems of Toupin’s gradient elasticity theory at finite strains',
                'Comp. Meth. App. Mech. Engrg. (CMAME) 278 (2014) 705-728.'
            ),
            makePaper(
                'P. Motamarri, V. Gavini',
                'A subquadratic-scaling subspace projection method for large-scale Kohn-Sham DFT calculations using spectral finite-element discretization',
                'Phys. Rev. B 90 115127 (2014).'
            ),

            // 2013
            makePaper(
                'V. Sundararaghavan, S. Sun',
                'Modeling crack propagation in polycrystalline alloys using a variational multiscale cohesive method',
                '2nd World Congress on Integrated Computational Materials Engineering (Edited by M. Li et. al.), Wiley, New York, p. 225-230, 2013.'
            ),
        ]
        ;
    })
    .controller('PresentationsController', function () {
        var ctrl = this;

        ctrl.invitedPresentations = [
            {
                title: 'ICME: Past, Present and Future',
                authors: 'John Allison',
                details: 'Invited Plenary, ICME World Congress, TMS, Colorado Springs, CO, June 2015.'
            },
            {
                title: 'PRISMS, A Software Innovation Center for the Structural Metals Community',
                authors: 'John Allison',
                details: 'Invited Lecture, ICME World Congress, TMS, Colorado Springs, CO, June 2015.'
            },
            {
                title: 'Integrated Computational Engineering for Titanium Products',
                authors: 'John Allison',
                details: 'Invited Keynote, International Titanium Congress, San Diego, CA, August 2015.'
            },
            {
                title: 'PRISMS Center: A Software Innovation Center for the Structural Metals Community',
                authors: 'John Allison',
                details: 'Invited Talk, TMS Annual Meeting, Nashville, TN, March 2016.'
            },
            {
                title: 'PRISMS Center: Integrated Software Tools and A Framework for the Global Structural Metals Community',
                authors: 'John Allison',
                details: 'Invited Talk, ICME Integration Workshop, ICMEg, Barcelona, Spain, April 2016.'
            },
            {
                title: 'APT analysis of the microstructure of Mg-Nd alloys',
                authors: 'Vicente Aruallo-Peters &amp; Emmanuelle Marquis',
                details: 'Gordon Conference on Physical Metallurgy (2015).'
            },
            {
                title: 'PRISMS-PF: An Open Source Finite Element Phase Field Code',
                authors: 'S. DeWitt, S. Rudraraju, K. Thornton, and J. Allison',
                details: 'Center for Hierarchical Materials Design Phase Field Methods Workshop III, Evanston, IL, May 4, 2016.'
            },
            {
                title: 'An Update on the Progress of PRISMS-PF',
                authors: 'S. Rudraraju, S. DeWitt, K. Thornton, and J. Allison',
                details: 'Center for Hierarchical Materials Design Phase Field Methods Workshop II, Evanston, IL, October 15, 2015.'
            },
            {
                title: 'Peridynamics and Finite Element Approaches for Crystal Plasticity: Numerical Comparisons and Experimental Validation',
                authors: 'V. Sundararaghavan',
                details: 'Numerical Comparisons and Experimental Validation, Structural TIM 2015, Falls Church, VA, June 24-26 2015.'
            },
            {
                title: 'Defects in Phase-Field Crystal Models: Comparison to Molecular Dynamics',
                authors: 'D. Montiel, J. Luce, B. Hodge, P. Goins, E. Holm, and K. Thornton',
                details: 'TMS 145th Annual Meeting 2016, Nashville, TN, February 14-18, 2016.'
            },
            {
                title: 'Experiments and Simulations of Recrystallization in Plastically Deformed Titanium',
                authors: 'K. Thornton',
                details: 'International Conference on Plasticity 2016, Kona, HI, January 3-8, 2016. (Keynote)'
            },
            {
                title: 'Unconditionally Stable Second-Order Time Integration Algorithms for Coupled Mechano-Chemistry',
                authors: 'Koki Sagiyama, Krishna Garikipati, Shiva Rudraraju',
                details: 'invited talk at the 13th US National Congress on Computational Mechanics, July 26-30, San Diego.'
            },
            {
                title: 'Microstructure Change and Interface Motion As Problems of Evolving Material Configurations',
                authors: 'Gregory Teichert, Krishna Garikipati',
                details: 'invited keynote talk at the 13th US National Congress on Computational Mechanics, July 26-30, San Diego.'
            },
            {
                title: 'A Massively Parallel Terascale Matrix-Free Computational Framework for Phase Field Modeling',
                authors: 'Shiva Rudraraju',
                details: 'invited talk at the 13th US National Congress on Computational Mechanics, July 26-30, San Diego.'
            },
            {
                title: 'Large-scale real-space electronic structure calculations',
                authors: 'Vikram Gavini, Phani Motamarri',
                details: 'invited talk at 145th annual TMS meeting Nashville, 2016.'
            },
            {
                title: 'Large-scale real-space electronic structure calculations and studies on dislocations in Aluminum',
                authors: 'Vikram Gavini, Sambit Das, Mrinal Iyer',
                details: 'Key Note Talk at European Congress on Computational Methods in Applied Sciences and Engineering, Crete, Greece 2016.'
            },
            {
                title: 'High temperature statistical mechanics to enable alloys design.',
                authors: 'Anton Van der Ven',
                details: 'Invited talk at The Minerals, Metals and Materials Society (TMS) Annual Meeting, Nashville Tennessee, February 15, 2016.'
            },
            {
                title: '“Statistical Mechanics to enable design of high temperature alloys and ceramics”',
                authors: 'Anton Van der Ven',
                details: 'Invited talk at Workshop on High Performance Materials, GE Power, Bangalore, India, February 24, 2016.'
            },
            {
                title: 'Microscale Deformation Mapping and Large Data Analysis',
                authors: 'Zhe Chen and Sam Daly',
                details: 'University of New England, Biddeford, ME, July 2015.'
            },
            {
                title: 'The Materials Commons: A Novel Information Repository and Collaboration Platform for the Materials Community',
                authors: 'B. Puchala, G. Tarcea, S. Tamma, M. Hedstrom, H. V. Jagadish, E. A. Marquis, J. Allison',
                details: 'Opportunities in Materials Informatics Workshop, Madison, WI, February, 10, 2015.'
            },
            {
                title: 'Connecting phenomenological descriptions of microstructure evolution to the electronic structure of alloys',
                authors: 'B. Puchala, J. Zhu, A. Belak, J. C. Thomas, A. Van der Ven',
                details: 'ICME Summer School, Ann Arbor, MI, June 19, 2015.'
            },
            {
                title: 'CASM: A clusters approach to Statistical Mechanics',
                authors: 'B. Puchala, J. C. Thomas, A. Van der Ven',
                details: 'ICME Summer School, Ann Arbor, MI, June 23, 2015.'
            },
            {
                title: 'Automating the characterization of materials thermodynamics and kinetics using ab initio based cluster expansion Hamiltonian methods with CASM',
                authors: 'B. Puchala, J. C. Thomas, A. Van der Ven',
                details: '13th US National Congress on Computational Mechanics, San Diego, CA., July 27, 2015.'
            },
            {
                title: 'The Materials Commons: A Novel Information Repository and Collaboration Platform for the Materials Community',
                authors: 'B. Puchala, G. Tarcea, S. Tamma, M. Hedstrom, H. V. Jagadish, E. A. Marquis, J. Allison',
                details: 'CHiMaD Buiding an Interoperable Materials Data Infrastructure Workshop, Evanston, IL, May, 2, 2016.'
            }
        ];

        ctrl.contributedPresentations = [
            {
                title: 'The Materials Commons: A Novel Information Repository and Collaboration Platform for the Materials Community',
                authors: 'B. Puchala, G. Tarcea, S. Tamma, E. A. Marquis, J. Allison',
                details: '3rd World Congress on Integrated Computational Materials Engineering, Colorado Spring, CO, June 3, 2015.'
            },
            {
                title: 'Crystal plasticity modeling and validation of deformation response in Magnesium Alloys',
                authors: 'S. Ganesan, A. Githens, V. Sundararaghavan, J. Allison',
                details: '15th Pan-American Congress of Applied Mechanics-PACAM XV, 18-21 May, 2015, Champaign, USA.'
            },
            {
                title: 'A Multi-Scale Comparison of Grain Boundary Structure Using the Phase-Field Crystal Model and Molecular Dynamics',
                authors: 'J. Luce, B. Hodge, P. Goins, E. Holm, and K. Thornton',
                details: 'TMS ICME 2015, Colorado Springs, CO, May 31 - June 4, 2015.'
            },
            {
                title: 'The Structure of β” and β’ in an Aged Mg-Nd Alloy.',
                authors: 'Ellen Solomon, Emmanuelle Marquis,',
                details: 'TMS Annual Meeting (2016).'
            },
            {
                title: 'Parameterization of the Structural Phase Field Crystal Model for the Simulation of Grain Boundary Structures and Energies',
                authors: 'J. Luce and K. Thornton',
                details: 'TMS 145th Annual Meeting 2016, Nashville, TN, February 14-18, 2016.'
            },
            {
                title: 'Computational Modeling of Grain Boundaries Using the Phase Field Crystal Method',
                authors: 'J. Luce, B. Hodge, P. Goins, E. Holm, and K. Thornton',
                details: 'MICDE Annual Symposium, Ann Arbor, MI, April 7, 2016.'
            },
            {
                title: 'A Three-Dimensional Field Formulation, and Isogeometric Solutions to Point and Line Defect Cores Using Toupin’s Theory of Gradient Elasticity at Finite Strains',
                authors: 'Zhenlin Wang, Shiva Rudraraju, Krishna Garikipati',
                details: '13th US National Congress on Computational Mechanics, July 26-30, San Diego.'
            },
            {
                title: 'Large-scale real-space electronic structure calculations using adaptive finite element discretization',
                authors: 'Phani Motamarri, Vikram Gavini',
                details: '52nd Annual Technical Meeting of Society of Engineering Sciences, Texas A&amp;M, 2015.'
            },
            {
                title: 'Real-space finite-element formulation of orbital-free density functional theory for Al-Mg materials system',
                authors: 'Sambit Das, Vikram Gavini',
                details: '52nd Annual Technical Meeting of Society of Engineering Sciences, Texas A&M, 2015.'
            },
            {
                title: 'Short Crack Growth and Very High Cycle Fatigue Behavior of Magnesium Alloy WE43',
                authors: 'Jacob Adams',
                details: 'TMS Annual Meeting, Nashville TN, March 2016.'
            },
            {
                title: 'Aeriel Murphy',
                authors: 'The Effect of Aluminum Content on Recrystallization and Grain-Growth of Magnesium',
                details: 'Poster Presentation, TMS Annual Meeting, Nashville TN, March 2016.'
            }
        ];
    });
