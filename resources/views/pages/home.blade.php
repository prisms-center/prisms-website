
<x-layouts.prisms :title="'PRISMS Home'">
    <!-- Hero Section -->
{{--    <div class="main_container">--}}
{{--        <div class="main_pic"></div>--}}
{{--    </div>--}}

    <div class="main_area">
        <!-- Main Content Grid -->
        <div class="row g-4">
            <!-- Left Sidebar - Three Major Sections -->
            <div class="col-12 col-lg-4">
                <div class="sticky-top" style="top: 2rem;">
                    <h3 class="h4 mb-4 text-primary fw-bold">Our Core Pillars</h3>
                    <div class="d-grid gap-4">


                        <!-- PRISMS Computational Tools -->
                        <div class="card shadow-sm border-0">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="fas fa-code text-success fs-4"></i>
                                    </div>
                                    <h4 class="h5 mb-0 text-success">PRISMS Computational Tools</h4>
                                </div>
                                <p class="text-muted mb-3 small">
                                    Open-source multi-scale modeling codes that integrate cutting-edge computational methods for predictive materials science.
                                </p>
                                <a href="{{ route('tools') }}" class="btn btn-outline-success btn-sm">
                                    View Tools <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Integrated Collaborative Science -->
                        <div class="card shadow-sm border-0">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-warning bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="fas fa-users text-warning fs-4"></i>
                                    </div>
                                    <h4 class="h5 mb-0 text-warning">Integrated Collaborative Science</h4>
                                </div>
                                <p class="text-muted mb-3 small">
                                    Seamlessly connecting experimental insights with computational predictions through collaborative research methodologies.
                                </p>
                                <a href="{{ route('science') ?? '#' }}" class="btn btn-outline-warning btn-sm">
                                    Learn More <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- The Materials Commons -->
                        <div class="card shadow-sm border-0">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="fas fa-database text-primary fs-4"></i>
                                    </div>
                                    <h4 class="h5 mb-0 text-primary">The Materials Commons</h4>
                                </div>
                                <p class="text-muted mb-3 small">
                                    A collaborative platform for organizing, sharing, and publishing research data that accelerates materials discovery through open science.
                                </p>
                                <a href="{{ route('repository') }}" class="btn btn-outline-primary btn-sm">
                                    Explore Repository <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="col-12 col-lg-8">
                <!-- Featured Workshop Section -->
                <div class="card border-0 shadow-sm mb-4 bg-gradient" style="backgroundx: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary rounded-circle p-2 me-3">
                                <i class="fas fa-calendar-alt text-white"></i>
                            </div>
                            <div>
                                <h2 class="h4 mb-1">
                                    <a class="text-decoration-none text-primary fw-bold" href="{{ route('workshop') }}">
                                        Annual PRISMS Center Workshop 2025
                                    </a>
                                </h2>
                                <span class="badge bg-primary">August 4-8, 2025</span>
                            </div>
                        </div>
                        <p class="mb-3">
                            Join us for our comprehensive annual workshop featuring hands-on training with PRISMS computational tools (August 4-6) followed by our research symposium (August 7-8).
                            <strong>Registration is now open!</strong>
                        </p>
                        <a class="btn btn-primary" href="{{ route('workshop') }}">
                            <i class="fas fa-external-link-alt me-2"></i>Registration & Details
                        </a>
                    </div>
                </div>

                <!-- PRISMS Codes Section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="bg-success bg-opacity-10 rounded p-2 me-3">
                                <i class="fab fa-github text-success fs-4"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h2 class="h4 mb-2">
                                    <a class="text-decoration-none text-dark" href="{{ route('tools') }}">
                                        Open Source Computational Codes
                                    </a>
                                </h2>
                                <p class="text-muted mb-3">
                                    Access our complete suite of computational tools through GitHub. These open-source codes represent years of collaborative development in multi-scale materials modeling.
                                </p>
                                <a href="{{ route('tools') }}" class="btn btn-outline-success">
                                    <i class="fab fa-github me-2"></i>Browse on GitHub
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Materials Commons Platform -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="bg-info bg-opacity-10 rounded p-2 me-3">
                                <i class="fas fa-cloud text-info fs-4"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h2 class="h4 mb-2">
                                    <a class="text-decoration-none text-dark" href="{{ route('repository') }}">
                                        Materials Commons Platform
                                    </a>
                                </h2>
                                <p class="text-muted mb-3">
                                    Our flagship data management platform empowers researchers to organize, collaborate on, and publish materials science data with unprecedented ease and accessibility.
                                </p>
                                <a href="https://materialscommons.org" target="_blank" rel="noopener" class="btn btn-outline-info">
                                    <i class="fas fa-external-link-alt me-2"></i>Visit Platform
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mission Statement -->
                <div class="card border-0 shadow-sm mb-4 bg-light">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h2 class="h3 text-primary fw-bold">Integrated • Predictive • Open</h2>
                            <div class="border-bottom border-primary mx-auto" style="width: 60px;"></div>
                        </div>
                        <p class="lead text-center text-muted mb-0">
                            At the PRISMS Center, integration drives everything we do. We seamlessly connect cutting-edge computational science with experimental discoveries, fostering a collaborative ecosystem that accelerates materials innovation through open-source tools and shared knowledge.
                        </p>
                    </div>
                </div>

                <!-- About PRISMS Center -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h2 class="h4 mb-3 text-primary">About the PRISMS Center</h2>
                        <div class="row g-4 align-items-center">
                            <div class="col-12 col-lg-8">
                                <p class="mb-3">
                                    <strong>PRISMS</strong> stands for <em>PRedictive Integrated Structural Materials Science</em>. Our center unites experimental and computational researchers with an ambitious vision: to establish a transformative scientific platform that accelerates predictive materials science for structural metals.
                                </p>
                                <p class="mb-0">
                                    We envision PRISMS tools and protocols becoming a community-developed, extensible scientific foundation that drives the <a class="link-primary" href="http://www.mgi.gov" target="_blank" rel="noopener">Materials Genome Initiative</a> forward, enabling rapid development of next-generation materials.
                                </p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <img class="img-fluid rounded shadow" src="/assets/img/center_computing_resources.jpeg" alt="PRISMS Center Computing Resources">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Funding Information -->
                <div class="card border-0 bg-light mb-4">
                    <div class="card-body p-4">
                        <h2 class="h5 mb-3 text-secondary">
                            <i class="fas fa-handshake me-2"></i>Funding & Partnership
                        </h2>
                        <p class="small text-muted mb-0">
                            The PRISMS Center operates as the Department of Energy (DOE) Software Innovation Center for Integrated Multi-Scale Modeling of Structural Metals. Supported by DOE-Basic Energy Sciences as part of the Materials Genome Initiative, we receive funding through the Predictive Theory and Modeling program and Mechanical Behavior and Radiation Effects Core Program, enhanced by substantial University of Michigan institutional support.
                        </p>
                        <p class="small text-muted mt-2 mb-0">
                            <strong>Award:</strong> U.S. Department of Energy, Office of Basic Energy Sciences, Division of Materials Sciences and Engineering #DE-SC0008637
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.prisms>
