<div class="h-100">
    <!-- Hero Section -->
    <div class="mb-4">
        <div class="d-flex align-items-center mb-3">
            <div class="icon-circle bg-danger bg-opacity-10 me-3 flex-shrink-0">
                <i class="fas fa-arrows-left-right text-danger fs-4"></i>
            </div>
            <div>
                <h2 class="h3 mb-1 text-danger">Tensile Behavior</h2>
                <p class="text-muted mb-0 small">Predicting mechanical response through multiscale deformation modeling</p>
            </div>
        </div>
    </div>

    <!-- Introduction -->
    <div class="mb-4">
        <p class="lead text-dark">
            The Tensile Behavior Use Case investigates and develops predictive capabilities for complex deformation
            phenomena in HCP systems, including dislocation-precipitate interactions, solid solution strengthening,
            twin formation, and grain boundary cracking propensity.
        </p>
    </div>

    <!-- Key Research Areas -->
    <div class="card border-0 bg-light mb-4">
        <div class="card-body p-4">
            <h3 class="h5 text-primary mb-3">
                <i class="fas fa-microscope me-2"></i>
                Complex Deformation Phenomena
            </h3>
            <p class="mb-3">
                A critical aspect of the PRISMS Center is integrating detailed microstructural simulations
                from other use groups with property models to predict mechanical behavior.
            </p>

            <div class="row g-3">
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-atom text-primary me-2 mt-1"></i>
                        <div>
                            <strong class="d-block">Dislocation Interactions</strong>
                            <small class="text-muted">Precipitate and dislocation-dislocation interactions in HCP systems</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-chart-line text-primary me-2 mt-1"></i>
                        <div>
                            <strong class="d-block">Alloying Effects</strong>
                            <small class="text-muted">Solid solution strengthening and twin formation prediction</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-map text-primary me-2 mt-1"></i>
                        <div>
                            <strong class="d-block">Strain Distributions</strong>
                            <small class="text-muted">Prediction and measurement of local deformation fields</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-exclamation-triangle text-primary me-2 mt-1"></i>
                        <div>
                            <strong class="d-block">Grain Boundary Cracking</strong>
                            <small class="text-muted">Propensity for failure at microstructural interfaces</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dislocation Dynamics Simulation -->
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card border-0 bg-danger bg-opacity-5 h-100">
                <div class="card-body p-3 text-center d-flex align-items-center justify-content-center">
                    <div>
                        <img src="/assets/img/usecases/dd.png"
                             alt="Dislocation dynamics simulation"
                             class="img-fluid rounded mb-2"
                             style="max-height: 180px;">
                        <small class="text-muted d-block">
                            ParaDis simulation of dislocation-precipitate interactions
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 h-100">
                <div class="card-body p-4">
                    <h3 class="h6 text-danger mb-3">
                        <i class="fas fa-cube me-2"></i>
                        Dislocation Dynamics Modeling
                    </h3>
                    <p class="mb-3">
                        ParaDis simulations capture the interaction of dislocations on HCP basal planes with γ precipitates
                        in Mg-Al alloys, providing fundamental insights into strengthening mechanisms at the atomic scale.
                    </p>
                    <div class="d-flex align-items-center text-muted small mb-2">
                        <i class="fas fa-users me-1"></i>
                        <span>L. Aagesen, PRISMS Center</span>
                    </div>
                    <div class="d-flex align-items-center text-muted small">
                        <i class="fas fa-handshake me-1"></i>
                        <span>S. Aubry & T. Arsenlis, LLNL</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Integration Workflow -->
    <div class="mb-4">
        <h3 class="h5 text-dark mb-3">
            <i class="fas fa-sitemap me-2"></i>
            Integrated Workflow
        </h3>
        <div class="card border-0 bg-light">
            <div class="card-body p-4 text-center">
                <img src="/assets/img/usecases/tensile-integration2.png"
                     alt="Tensile behavior workflow diagram"
                     class="img-fluid rounded mb-3"
                     style="max-width: 90%;">
                <p class="text-muted mb-0 small">
                    Complete workflow for tensile behavior prediction from atomistic to continuum scales
                </p>
            </div>
        </div>
    </div>

    <!-- Integration Protocol -->
    <div class="card border-0 bg-danger bg-opacity-5 mb-4">
        <div class="card-body p-4">
            <h3 class="h5 text-danger mb-3">
                <i class="fas fa-cogs me-2"></i>
                PRISMS Integration Protocol
            </h3>
            <p class="mb-3">
                The tensile behavior integration protocol creates a seamless multiscale modeling framework
                connecting atomistic insights to macroscopic mechanical response:
            </p>

            <div class="row g-4">
                <!-- Step 1: Statistical Mechanics -->
                <div class="col-md-6">
                    <div class="card border-0 bg-white bg-opacity-75 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-start mb-3">
                                <div class="badge bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">1</div>
                                <div>
                                    <h4 class="h6 text-primary mb-1">Statistical Mechanics Inputs</h4>
                                    <small class="text-muted">Fundamental material parameters</small>
                                </div>
                            </div>
                            <p class="small mb-2">
                                Outputs from statistical mechanics calculations provide essential parameters for
                                dislocation dynamics and traction separation laws in the Variational Multiscale Method.
                            </p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chart-bar text-primary me-2"></i>
                                <span class="small text-muted">Material Properties</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Dislocation Dynamics -->
                <div class="col-md-6">
                    <div class="card border-0 bg-white bg-opacity-75 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-start mb-3">
                                <div class="badge bg-success text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">2</div>
                                <div>
                                    <h4 class="h6 text-success mb-1">ParaDis Calculations</h4>
                                    <small class="text-muted">Mesoscale dislocation behavior</small>
                                </div>
                            </div>
                            <p class="small mb-2">
                                ParaDis simulations model dislocation interactions and motion, providing critical
                                inputs for crystal plasticity models and strength predictions.
                            </p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-atom text-success me-2"></i>
                                <span class="small text-muted">Dislocation Dynamics</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Crystal Plasticity -->
                <div class="col-md-6">
                    <div class="card border-0 bg-white bg-opacity-75 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-start mb-3">
                                <div class="badge bg-warning text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">3</div>
                                <div>
                                    <h4 class="h6 text-warning mb-1">Crystal Plasticity Modeling</h4>
                                    <small class="text-muted">Polycrystal deformation</small>
                                </div>
                            </div>
                            <p class="small mb-2">
                                PRISMS-Crystal Plasticity and PRISMS-Plasticity codes incorporate dislocation
                                dynamics results to predict macroscopic mechanical behavior.
                            </p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-cube text-warning me-2"></i>
                                <span class="small text-muted">Polycrystal Response</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 4: Experimental Validation -->
                <div class="col-md-6">
                    <div class="card border-0 bg-white bg-opacity-75 h-100">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-start mb-3">
                                <div class="badge bg-secondary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">4</div>
                                <div>
                                    <h4 class="h6 text-secondary mb-1">Experimental Validation</h4>
                                    <small class="text-muted">In-situ measurements</small>
                                </div>
                            </div>
                            <p class="small mb-2">
                                Key experimental measurements from in-situ SEM-DIC provide grain orientations,
                                local cracking, slip, and grain rotation data for model validation.
                            </p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-microscope text-secondary me-2"></i>
                                <span class="small text-muted">SEM-DIC Analysis</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Experimental Characterization -->
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card border-0 h-100">
                <div class="card-body p-4">
                    <h3 class="h6 text-warning mb-3">
                        <i class="fas fa-eye me-2"></i>
                        In-Situ SEM-DIC Analysis
                    </h3>
                    <p class="mb-3">
                        Scanning electron microscopy with digital image correlation (SEM-DIC) provides real-time
                        measurement of deformation fields, enabling direct validation of computational predictions
                        and understanding of local failure mechanisms.
                    </p>
                    <div class="d-flex align-items-center text-muted small">
                        <i class="fas fa-user me-1"></i>
                        <span>A. Githens, PRISMS Center</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 bg-warning bg-opacity-5 h-100">
                <div class="card-body p-3 text-center d-flex align-items-center justify-content-center">
                    <div>
                        <img src="/assets/img/usecases/Tensile_SEM_DIC_Deformation.png"
                             alt="SEM-DIC deformation measurement"
                             class="img-fluid rounded mb-2"
                             style="max-height: 150px;">
                        <small class="text-muted d-block">
                            SEM-DIC image showing deformation in Mg-Nd-Y alloys
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Key Scientific Questions -->
    <div class="card border-0 bg-primary bg-opacity-5 mb-4">
        <div class="card-body p-4">
            <h3 class="h5 text-primary mb-3">
                <i class="fas fa-lightbulb me-2"></i>
                Fundamental Scientific Questions
            </h3>
            <p class="mb-3">Our tensile behavior research addresses critical questions for predictive materials design:</p>

            <div class="row g-3">
                <div class="col-12">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-arrow-right text-primary me-2 mt-1 flex-shrink-0"></i>
                        <div>
                            <strong class="d-block">Fatigue Crack Propagation</strong>
                            <small class="text-muted">How do fatigue cracks propagate across grain boundaries in HCP systems?</small>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-arrow-right text-primary me-2 mt-1 flex-shrink-0"></i>
                        <div>
                            <strong class="d-block">Grain Boundary Influence</strong>
                            <small class="text-muted">How do grain boundaries influence fatigue crack growth rates and failure modes?</small>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-arrow-right text-primary me-2 mt-1 flex-shrink-0"></i>
                        <div>
                            <strong class="d-block">Microstructural Integration</strong>
                            <small class="text-muted">How can microstructural simulations be integrated with property models for accurate predictions?</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Variational Multiscale Method -->
    <div class="card border-0 bg-secondary bg-opacity-5 mb-4">
        <div class="card-body p-4">
            <h3 class="h5 text-secondary mb-3">
                <i class="fas fa-layer-group me-2"></i>
                Variational Multiscale Method
            </h3>
            <div class="d-flex align-items-start">
                <i class="fas fa-calculator text-secondary me-3 mt-1"></i>
                <div>
                    <p class="mb-2">
                        <strong>Advanced Computational Approach:</strong> The Variational Multiscale Method incorporates
                        traction separation laws for slip band formation and cracking, bridging scales from dislocation
                        dynamics to macroscopic failure prediction.
                    </p>
                    <p class="mb-0 small text-muted">
                        This method enables seamless integration of atomistic insights into continuum-scale models,
                        providing unprecedented accuracy in mechanical behavior prediction.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Computational Tools -->
    <div class="card border-0 bg-dark bg-opacity-5">
        <div class="card-body p-4">
            <h3 class="h5 text-dark mb-3">
                <i class="fas fa-tools me-2"></i>
                Computational Tools
            </h3>
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="card border border-secondary border-opacity-25">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-atom text-primary me-2"></i>
                                <strong class="text-primary">PRISMS DFT</strong>
                            </div>
                            <small class="text-muted">Real Space Kohn-Sham Density Functional Theory Code</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border border-secondary border-opacity-25">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-wave-square text-success me-2"></i>
                                <strong class="text-success">PRISMS-PF</strong>
                            </div>
                            <small class="text-muted">Phase Field Code for microstructural evolution</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border border-secondary border-opacity-25">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-cube text-danger me-2"></i>
                                <strong class="text-danger">Crystal Plasticity</strong>
                            </div>
                            <small class="text-muted">PRISMS Crystal Plasticity Code for polycrystal modeling</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border border-secondary border-opacity-25">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-expand-arrows-alt text-warning me-2"></i>
                                <strong class="text-warning">Continuum Plasticity</strong>
                            </div>
                            <small class="text-muted">PRISMS Continuum Plasticity Code for macroscale modeling</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border border-secondary border-opacity-25">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-flask text-secondary me-2"></i>
                                <strong class="text-secondary">Mechano-Chemical</strong>
                            </div>
                            <small class="text-muted">Transformations Code (Research) for coupled phenomena</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Research Code Note -->
            <div class="mt-3">
                <div class="alert alert-info border-0 bg-info bg-opacity-10 d-flex align-items-start">
                    <i class="fas fa-info-circle text-info me-2 mt-1"></i>
                    <small class="mb-0">
                        <strong>PRISMS Mechano-Chemical Transformations Code</strong> represents cutting-edge research
                        capabilities for modeling coupled mechanical and chemical phenomena during deformation.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
