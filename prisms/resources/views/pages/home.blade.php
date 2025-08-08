<x-layouts.prisms :title="'PRISMS Home'">
    <div class="main_container">
        <div class="main_pic"></div>
    </div>

    <div class="main_area">
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="d-grid gap-3">
                    <div class="p-4 border rounded">
                        <h4 class="h5 mb-0">The Materials Commons</h4>
                    </div>
                    <div class="p-4 border rounded">
                        <h4 class="h5 mb-0">PRISMS Computational Tools</h4>
                    </div>
                    <div class="p-4 border rounded">
                        <h4 class="h5 mb-0">Integrated Collaborative Science</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="mb-4">
                    <h2 class="h4"><a class="link-primary text-decoration-none" href="{{ route('workshop') }}">Annual PRISMS Center Workshop August 2025</a></h2>
                    <p>
                        PRISMS Center will be holding its annual workshop on August 4th-8th, 2025. Training on PRiSMS tools will be August 4th-6th. The symposium will be August 7th-8th. Registration is <b>now</b> open.
                    </p>
                    <p><b>Please <a class="link-primary" href="{{ route('workshop') }}">click here</a> for details.</b></p>
                </div>
                <div class="mb-4">
                    <h2 class="h4"><a class="link-primary text-decoration-none" href="{{ route('tools') }}">PRISMS Codes</a></h2>
                    <p>
                        The PRISMS Computational Codes are available on Github. See the announcement <a class="link-primary" href="{{ route('tools') }}">here.</a>
                    </p>
                </div>
                <div class="mb-4">
                    <h2 class="h4"><a class="link-primary text-decoration-none" href="{{ route('repository') }}">Materials Commons</a></h2>
                    <p>
                        The Materials Commons site is a platform for organizing, collaborating, publishing and sharing research data. You can access it
                        <a href="https://materialscommons.org" target="_blank" rel="noopener">here</a>.
                    </p>
                </div>
                <div class="mb-4">
                    <h2>Integrated, Focused, Open</h2>
                    <p>
                        At the PRISMS Center integration drives everything we do. Our science is integrated with our computational codes and with the results from our experimentalists who identify new phenomena and fill in missing details. Our Materials Commons repository allows groups to collaborate and share data and provide it to the broader technical community. And our computational software is seamlessly integrating the latest multi-length scale scientific software into open source codes.
                    </p>
                </div>
                <div class="mb-4">
                    <h2 class="h4">About PRISMS Center</h2>
                    <div class="row g-3">
                        <div class="col-12 col-lg-9">
                            PRISMS is short for PRedictive Integrated Structural Materials Science. Combining the efforts of experimental and computational researchers, the overarching goal of the PRISMS Center is to establish a unique scientific platform that will enable accelerated predictive materials science for structural metals. Our ambitious vision is that the PRISMS tools and protocols will become a community-developed, extensible scientific core for accelerating the development of new materials as envisioned by the <a class="link-primary" href="http://www.mgi.gov" target="_blank" rel="noopener">Materials Genome Initiative</a> (MGI).
                        </div>
                        <div class="col-12 col-lg-3">
                            <img class="img-fluid rounded" src="/assets/img/center_computing_resources.jpeg" alt="Computing resources">
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <h2 class="h5">Funding</h2>
                    <p>
                        Our Center is formally known as the Department of Energy (DOE) Software Innovation Center for Integrated Multi-Scale Modeling of Structural Metals. The PRISMS Center is one of several such centers that DOE-Basic Energy Science (BES) supports as part of the <a class="link-primary" href="http://www.mgi.gov" target="_blank" rel="noopener">Materials Genome Initiative</a> to encourage and support development of open-source computational tools and repositories and facilitate large-scale community involvement. It is funded as part of the DOE-BES Predictive Theory and Modeling program and Mechanical Behavior and Radiation Effects Core Program. The PRISMS Center has leveraged this with substantial University of Michigan internal cost-shared resources provided by UM College of Engineer and the three departments and engineering faculty involved in the center. This work is supported by the U.S. Department of Energy, Office of Basic Energy Sciences, Division of Materials Sciences and Engineering under Award #DE-SC0008637.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.prisms>
