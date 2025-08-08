<div class="software-area">
    <h2 style="padding-top: 120px; margin-top: -70px;">
        <b>PRISMS Computational Tools - Open Source Codes Available on Github</b>
    </h2>
    <p class="tab-content-details">
        The PRISMS Computational Tools are available on Github. The following codes are available:
    </p>

    <ul>
        <li>
            Virtual Machine with PRiSMS Software Installed
            <ul>
                <li><a href="https://www.dropbox.com/scl/fi/ee78dybczt4mpfstowbv2/PRISMS_Tools_v6.ova?rlkey=a9cj3cpl1u4ebzd54iscmwvod&dl=0" target="_blank">Download Virtual Machine</a></li>
                <li><a href="assets/workshop/Virtual_Machine_Installation.pdf">Installation Instructions</a></li>
            </ul>
        </li>
        <li>
            CASM (Statistical Mechanics):
            <a href="https://github.com/prisms-center/CASMcode" target="_blank">
                CASM Github Repo
            </a>
        </li>
        <li>
            DFT-FE (Real-space DFT calculations using Finite-elements):
            <a href="https://github.com/dftfeDevelopers/dftfe/tree/release" target="_blank">
                DFT-FE Github Repo
            </a>
        </li>
        <li>
            PRISMS-PF (Phase Field):
            <a href="https://github.com/prisms-center/phaseField" target="_blank">
                PRISMS-PF Github Repo
            </a>
        </li>
        <li>
            PRISMS-Plasticity:
            <a href="https://github.com/prisms-center/plasticity" target="_blank">
                PRISMS-Plasticity Github Repo
            </a>
        </li>
        <li>
            PRISMS Integration Tools:
            <a href="https://github.com/prisms-center/IntegrationTools" target="_blank">
                Integration Tools Github Repo
            </a>
        </li>
    </ul>

    <p class="tab-content-details">
        <b>NOTE:</b> To receive updates on our codes and progress please register on our
        <a ui-sref="community">community page.</a>
    </p>
    <h2 style="padding-top: 80px; margin-top: -70px;">
        PRISMS Integrated Software Framework
    </h2>

    <p class="tab-content-details">
        The PRISMS integrated computational codes for multiscale materials modeling allow for
        fast development of large-scale numerical frameworks for various mathematical models
        of material behavior (Continuum Plasticity, Crystal Plasticity, Phase Field, Statistical
        Mechanics, DFT, etc). Our tools provide scalable high performance computing (HPC)
        capabilities for solving large-scale multiphysics problems and model integration across
        different length scales.
    </p>
    <br>
    <p class="tab-content-details">
        Even better, all our tools are released as open source under the GNU
        Lesser General Public License (LGPL) license. You can to take these leading
        edge tools, peak under the hood to see how we do things, and integrate them into
        your research.
    </p>
    <br>
    <p class="tab-content-details">
        At the PRISMS-Center we strongly believe in building an active and collaborative
        research community for a sustainable development and use of our suite of material
        modeling tools. If you are interested in collaborating and participating in codes
        development head on over to our contact page and drop us a line. Building a
        community and solving hard modeling problems is important to us.
    </p>
    <br>

    <a name="dft"></a>
    <p class="tab-content-details">
        Each of these codes can be used stand alone or
        in an integrated environment. To support the integration, we also provide an
        integration framework you can use to customize and integrate these tools into your
        existing computational ecosystem.
    </p>

    <br>
    <h4>DFT-FE: Real Space Kohn-Sham Density Functional Theory Code</h4>
    <a href="http://www-personal.umich.edu/~vikramg/index.html" target="_blank">V. Gavini</a>,
    <a href="http://www-personal.umich.edu/~phanim/" target="_blank">P. Motamarri</a>, S. Das, S. Rudraraju
    <p class="tab-content-details">
        Electronic structure calculations have played a significant role in the investigation of
        materials properties over the past few decades. In particular, the Kohn-Sham approach to
        density functional theory (DFT) has made quantum-mechanically informed calculations on
        ground-state materials properties computationally tractable, and has provided many
        important insights into a wide range of materials properties.
    </p>
    <p class="tab-content-details">
        As part of the PRISMS software suite, we are developing a finite element (FEM) based
        real-space numerical framework for modeling Kohn-Sham DFT. Our primary focus is on
        accurate electronic structure study of the energetics of defects in crystalline materials
        using computational domains (with non-periodic/semi-periodic/periodic geometries) containing
        tens of thousands of atoms. DFT-FE provides us a first principles framework for determining relevant
        material properties.
    </p>
    <a name="casm"></a>
    <img src="assets/img/ctools/DFT_1.png" width="20%" height="20%">
    <img src="assets/img/ctools/DFT_2.png" width="30%" height="30%">
    <br>
    <br>
    <h4>CASM: Statistical Mechanics Code</h4>
    <a href="http://www.mse.engin.umich.edu/people/faculty/vanderven" target="_blank">A. Van der Ven</a>,
    B. Puchala, J. Thomas
    <p class="tab-content-details">
        CASM, a Clusters Approach to Statistical Mechanics, is the PRISMS
        statistical mechanics software. The current release provides functionality for symmetry
        <a name="pf"></a>
        identification, specification of composition axes, enumeration of
        symmetrically unique supercells and configurations, automatic VASP job
        submission and results collection, use of automatically determined or
        custom reference states for formation energy calculation, and convex
        hull identification. Our next major release will include improved cluster
        expansion fitting tools and semi-grand canonical ensemble Monte Carlo calculations.
    </p>

    <br>
    <h4>PRISMS-PF: Phase Field Modeling Code</h4>
    <a href="http://www.mse.engin.umich.edu/people/faculty/thornton" target="_blank">K. Thornton</a>,
    <a href="http://www-personal.umich.edu/~rudraa/" target="_blank">S. Rudraraju,</a>
    S. DeWitt, D. Montiel
    <p class="tab-content-details">
        Phase field models have been central to computational modeling of complex morphological
        evolution in multiphase systems. Here at the PRISMS Center, we are developing a massively
        scalable phase field modeling framework based on the
        <a href="https://www.dealii.org" target="_blank">deal.ii open-source finite element library</a>, which
        provides extensive support for various finite element constructs, peta-scale
        grid generation with adaptivity (p4est adaptive octree meshes), scalable data structures and
        solvers. The PRISMS-PF framework provides a flexible platform for solving a wide range of
        partial differential equations, including, but not limited to, those typically found in
        phase field models. At the PRISMS Center, our initial focus is on phase field modeling
        precipitate evolution in binary and ternary alloys, as well as grain growth and recrystallization.
    </p>
    <p class="tab-content-details">
        Current applications modules include matrix-free implementations of the Allen-Cahn equation,
        Cahn-Hilliard equation, the diffusion equation, and linear elasticity, as well as coupled systems
        with combinations of these equations. The parallel performance and scaling has been demonstrated
        on terascale problems with billions of degrees of freedom running on thousands of processors.
        Benchmarking versus an MPI-parallelized finite difference code has demonstrated over a 4x
        improvement in simulation speed over standard finite difference approaches. More details can be found
        at <a href="http://prisms-center.github.io/phaseField/" target="_blank">PRISMS-PF Website</a>.
    </p>
    <img src="assets/img/ctools/PF_1.png" width="20%" height="20%"></img>
    <img src="assets/img/ctools/PF_2.png" width="20%" height="20%"></img>
    <br>
    <br>
    <h4>PRISMS-Plasticity: Continuum Platicity and Crystal Plasticity Codes</h4>
    M. Yaghoobi, S. Ganesan, S. Sundar, A. Lakshmanan,
    <!--    <a href="http://www-personal.umich.edu/~krishna/" target="_blank">K. Garikipati</a>,-->
    <a href="http://umich.edu/~veeras/" target="_blank">V. Sundararaghavan</a>,
    <!--    <a href="http://www-personal.umich.edu/~rudraa/" target="_blank">S. Rudraraju</a>-->
    <p class="tab-content-details">
        The PRISMS-Plasticity code is an open source parallel continuum and 3-D crystal plasticity finite element (CPFE)
        software package which is developed as a part of PRISMS integrated framework. In the case of CPFE part, both
        rate-independent and rate-dependent crystal plasticity algorithms are implemented along with developing their
        algorithmic tangent modulus. Additionally, two different sets of twin models are included: the conventional
        predominant twinning reorientation (PTR) scheme and an advanced multiscale twinning-detwinning model. The
        PRISMS-Plasticity software can be integrated with experimental characterization techniques such as electron
        backscatter diffraction (EBSD) and synchrotron X-ray diffraction using available open source software packages
        of DREAM.3D and Neper. PRISMS-Plasticity can also be integrated with the information repository of
        Materials Commons. The parallel performance of the software is investigated which demonstrates that it scales
        well for large problems running on hundreds of processors. Various examples of polycrystalline metals with
        face-centered cubic (FCC), body-centered cubic (BCC), and hexagonal close-packed (HCP) crystals structures are
        studied to show the capability of the software to efficiently solve crystal plasticity boundary value problems,
        in addition to integration with preprocessing and postprocessing tools. Under continuum plasticity, we
        currently support J2-flow theory with isotropic hardening, and include the following isotropic non-linear
        hyper-elastic models: Quad-Log, Neo-Hookean, St. Venant Kirchoff.
    </p>

    <img src="assets/img/ctools/Prisms-Plasticity-Website.jpg" width="50%" height="50%">
    <br>
    <br>
    <h4>Integration Tools: IntegrationTools and IntegrationToolsWriter</h4>
    B. Puchala
    <p class="tab-content-details">
        Integration of PRISMS Codes and external codes is an important aspect of the PRISMS
        Integrated Framework. To accomplish this the IntegrationTools package was developed
        and includes the IntegrationTools header file library that defines and implements
        an API for easily passing arbitrary functions and fields, referred to as
        ‘PFunctions’ and ‘PFields’, between different software programs. A separate software
        package, IntegrationToolsWriter was also developed and includes programs that
        generate and compile the C++ code for PFunctions from symbolic mathematical
        expressions. We are using this within PRISMS to facilitate passing parameters
        between codes that operate at different scales in our integrated multi-scale model.
    </p>
</div>
