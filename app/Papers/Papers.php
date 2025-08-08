<?php

namespace App\Papers;

use Illuminate\Support\Collection;

class Papers
{
    public static function all(): Collection
    {
        return collect([
            // 2024
            [
                'authors' => 'D.A. Greeley, J.F. Adams, P. Kneissi, J.W. Jones, A.D. Spear, J.E. Allison',
                'title' => 'Use of Multi-Modal HEDM for characterization of fatigue crack paths in Mg WE43',
                'details' => 'Fatigue and Fracture of Engineering Materials and Structures, 47 (2024) 1150-1171',
                'year' => 2024,
            ],
            [
                'authors' => 'A. Tallman and Y. Yaghoobi',
                'title' => 'PRISMS-Indentation: Multi-scale Elasto-Plastic Virtual Indentation Module',
                'details' => 'Integrating Materials and Manufacturing Innovation (2024) (2024) 1-18',
                'year' => 2024,
            ],
            [
                'authors' => 'A. Roy, S. Ganesen, P. Acar, R. Arroyave, V. Sundararaghavan',
                'title' => 'Combining crystal plasticity and phase field model for predicting texture evolution and the influence of nuclei clustering on recrystallization path kinetics in Ti-alloys',
                'details' => 'Acta Materialia, 266 (2024) 119645',
                'year' => 2024,
            ],
            [
                'authors' => 'S. Das and V. Gavini',
                'title' => 'Accelerating self-consistent field iterations in Kohn-Sham density functional theory using a low-rank approximation of the dielectric matrix',
                'details' => 'Physical Review B, 107 (12) (2024) 125133',
                'year' => 2024,
            ],
            [
                'authors' => 'V. Menon, S. Das, V. Gavini, L. Qi',
                'title' => 'Atomistic simulations and machine learning of solute grain boundary segregation in Mg alloys at finite temperatures',
                'details' => 'Acta Materialia, 264 (2024) 119515',
                'year' => 2024,
            ],
            [
                'authors' => 'D. Ober and A. Van der Ven',
                'title' => 'Thermodynamically informed priors for uncertainty propagation in first-principles statistical mechanics',
                'details' => 'Physical Review Materials, 8 (2024). 103803',
                'year' => 2024,
            ],
            [
                'authors' => 'E. Song, M. Andani, A. Misra',
                'title' => 'Quantification of grain boundary effects on the geometrically necessary dislocation density evolution and strain hardening of polycrystalline Mg-4Al using in situ tensile testing in scanning electron microscope and HR-EBSD',
                'details' => 'Journal of Magnesium and Alloys, 12 (2024) 1815-1829',
                'year' => 2024,
            ],
            [
                'authors' => 'Y. Zhang, M. Yaghoobi, Y. Zhang, D. Rubio-Ejchel, P. Kenesei, J. Park, A. Rollett, J. Gordon',
                'title' => 'In situ measurement of three-dimensional intergranular stress localizations and grain yielding under elastoplastic axial-torsional loading',
                'details' => 'Journal of Materials Research and Technology, 30 (2024) 8792-8804',
                'year' => 2024,
            ],
            [
                'authors' => 'D. Greeley, J. Adams, P. Kenesei, A. Spear, J. Allison',
                'title' => 'Quantitative analysis of three‐dimensional fatigue crack path selection in Mg alloy WE43 using high‐energy X‐ray diffraction microscopy',
                'details' => 'Fatigue and Fracture of Engineering Materials and Structures 4 (2024) 1150-1171',
                'year' => 2024,
            ],
            [
                'authors' => 'S. Lee, T. Berman, C. Yildirim, C. Detlefs, J. Allison, A. Bucsek',
                'title' => 'Multiscale in-situ characterization of static recrystallization using dark-field X-ray microscopy and high-resolution X-ray diffraction',
                'details' => 'Scientific Reports, 14 (1) (2024) 6241',
                'year' => 2024,
            ],
            [
                'authors' => 'S. Behara, J. Thomas, B. Puchala, A. Van der Ven',
                'title' => 'Chemomechanics in alloy phase stability',
                'details' => 'Physical Review Materials, 8 (3) (2024) 033801',
                'year' => 2024,
            ],
            [
                'authors' => 'E. Song, M. Andani, A. Misra',
                'title' => 'Investigation of grain size and geometrically necessary dislocation density dependence of flow stress in Mg-4Al by using nanoindentation',
                'details' => 'Acta Materialia, 265(2024) 119633',
                'year' => 2024,
            ],

            // 2023
            [
                'authors' => 'K. Bhattacharya, V. Gavini, M. Ortiz, M. Ponga, P. Suryanaryana',
                'title' => 'Accurate approximations of density functional theory for large systems with applications to defects in crystalline solids',
                'details' => 'Density Functional Theory, Editors: E. Cancés and G. Friesecke, Springer, (2023) 525-578',
                'year' => 2023,
            ],
            [
                'authors' => 'B. Puchala, A. Van der Ven etal',
                'title' => 'CASM: A software  package for first-principles based study of multicomponent crystalline solids',
                'details' => 'Computational Materials Science, 217 (2023) 111897',
                'year' => 2023,
            ],
            [
                'authors' => 'S. Das, B. Kanungo, V. Subramanian, G. Panigrahi, P. Motamarri, D. Rogers, P. Zimmerman, V. Gavini',
                'title' => 'Large-scale materials modeling at quantum accuracy: Ab initio simulations of quasicrystals and interacting extended defects in metallic alloys',
                'details' => 'The International Conference for High Performance Computing Networking, Storage and Analysis, SC\'23, November 12-17, Denver, CO, ACM, 2023 (Note: Gordon Bell Prize winning paper)',
                'year' => 2023,
            ],
            [
                'authors' => 'B. Phung, D. Greeley, M. Yaghoobi, J. Adams, J. Allison, A. Spear',
                'title' => 'Predicting microstructurally sensitive fatigue-crack path in WE43 magnesium using high-fidelity numerical modeling and three-dimensional experimental characterization',
                'details' => 'Fatigue and Fracture of Engineering Materials and Structures, 47, 3 (2023) 862-883',
                'year' => 2023,
            ],
            [
                'authors' => 'Mohammadreza Yaghoobi, Krzysztof S Stopka, David L McDowell, Lori Graham-Brady, Kirubel Teferra',
                'title' => 'Effect of sample size on the maximum value distribution of fatigue driving forces in metals and alloys',
                'details' => 'International Journal of Fatigue, 176 (2023) 107853',
                'year' => 2023,
            ],
            [
                'authors' => 'K. Stopka, M. Yaghoobi, J. Allison, D. McDowell',
                'title' => 'Microstructure-Sensitive Modeling of Surface Roughness and Notch Effects on Extreme Value Fatigue',
                'details' => 'International Journal of Fatigue, 166 (2023) 10725',
                'year' => 2023,
            ],
            [
                'authors' => 'A. Lakshmanan, M. Andani, M. Yaghoobi, J. Allison, A. Misra, V. Sundararaghavan',
                'title' => 'A combined experimental and crystal plasticity study of grain size effects in magnesium alloys',
                'details' => 'Journal of Magnesium Alloys 11 (12) (2023) 4445-44',
                'year' => 2023,
            ],
            [
                'authors' => 'J. Kim, Y. Kimura, B. Puchala, T. Yamazaki, U. Becker, W. Sun',
                'title' => 'Dissolution enables dolomite crystal growth near ambient conditions',
                'details' => 'Science, 382 (2023) 915-920',
                'year' => 2023,
            ],
            [
                'authors' => 'Viswath Goel, David Montiel, Katsuyo Thornton',
                'title' => 'Understanding the Effect of Electrochemical Properties and Microstructure on the Microgalvanic Corrosion of Mg Alloys via Phase-Field Simulations',
                'details' => 'Journal of the Electrochemical Society, 170 (2023) 101502',
                'year' => 2023,
            ],

            // 2022
            [
                'authors' => 'Lakshmanan, A., Yaghoobi, M., Stopka, K.S. and Sundararaghavan, V.',
                'title' => 'Crystal plasticity finite element modeling of grain size and morphology effects on yield strength and extreme value fatigue response',
                'details' => 'Journal of Materials Research and Technology, 19, (2022) pp.3337-3354',
                'year' => 2022,
            ],
            [
                'authors' => 'M. Andani, A. Lakshmanan, V. Sundararaghavan, J. Allison, A. Misra',
                'title' => 'Estimation of micro-Hall-Petch coefficients for prismatic slip in Mg-4Al as a function of grain boundary parameters',
                'details' => 'Acta Materialia, 226, 2022, 117613',
                'year' => 2022,
            ],
            [
                'authors' => 'K. Stopka, M. Yaghoobi, J. Allison and D. McDowell',
                'title' => 'Simulated effects of sample size and grain neighborhood on the modeling of extreme value fatigue response',
                'details' => 'Acta Materialia, 224, 2022, 117524',
                'year' => 2022,
            ],
            [
                'authors' => 'J. Yoo, M. Andani, A. Misra',
                'title' => 'Correlating dislocation structures to basal and prismatic slip bands near grain boundaries in tensile-tested Mg–4Al using a multiscale electron microscopy approach',
                'details' => 'Materials Science and Engineering, A 840 (2022) 142993',
                'year' => 2022,
            ],
            [
                'authors' => 'Z. Chen, C. Torbet and J. Allison',
                'title' => 'In-situ Characterization of Deformation Twinning in Magnesium during Cyclic Loading via Electron Backscatter Diffraction',
                'details' => 'JOM (2022) pp 2577-2591',
                'year' => 2022,
            ],
            [
                'authors' => 'Reza Roumina, Sangwon Lee, Tracy D. Berman, Katherine S. Shanks, John E. Allison, Ashley Bucsek',
                'title' => 'The dynamics of recrystallized grains during static recrystallization in Mg-Zn-Ca sheet alloy using in-situ far field high-energy diffraction microscopy',
                'details' => 'Acta Materialia 234 (2022) 118039',
                'year' => 2022,
            ],
            [
                'authors' => 'Sambit Das, Phani Motamarrri, Vishal Subramanian, David Rogers, Vikram Gavini',
                'title' => 'DFT-FE 1.0: A massively parallel hybrid CPU-GPU density functional theory code using finite-element discretization',
                'details' => 'Computer Physics Communications, 280 (2022) 108473',
                'year' => 2022,
            ],
            [
                'authors' => 'Zhenjie Yao, David Montiel and John Allison',
                'title' => 'Investigating the Effects of Dendrite Evolution on Microsegregation in Al-Cu Alloys by Coupling Experiments, Micro-Modeling, and Phase Field Simulations',
                'details' => 'Metallurgical and Materials Transactions A, V 53A (2022) 3342-3356',
                'year' => 2022,
            ],
            [
                'authors' => 'Z. Chen, M. Yaghoobi, V. Sundararaghavan, J. Allison and S. Daly',
                'title' => 'The Effects of Microstructure on Deformation Twinning in Mg WE43',
                'details' => 'MSEA, in press (2022)',
                'year' => 2022,
            ],
            [
                'authors' => 'W. Li, H. Sharma, P. Kenesei, S. Ravi, H. Sehitoglu, A. Bucsek',
                'title' => 'Resolving intragranular stress fields in plastically deformed titanium using scanning far-field high-energy diffraction microscopy',
                'details' => 'submitted to JMR (invited article for the Early Career Scholars in Materials Science special issue) (2022)',
                'year' => 2022,
            ],
            [
                'authors' => 'Liu, J., Carlson, J., Pasek, J., Puchala, B., Rao, A., and Jagadish, H. V.',
                'title' => 'Promoting and Enabling Reproducible Data Science Through a Reproducibility Challenge',
                'details' => 'Harvard Data Science Review, 4(3) (2022)',
                'year' => 2022,
            ],
            [
                'authors' => 'V. Goel, Y. Lyu, S.DeWitt, D. Montiel, K. Thornton',
                'title' => 'Simulating Microgalvanic Corrosion in Alloys Using the PRISMS Phase-Field Framework',
                'details' => 'MRS Communications, in press, 2022',
                'year' => 2022,
            ],

            // 2021
            [
                'authors' => 'Liang Tem and Wenbo Yu',
                'title' => 'Effects of cluster expansion on the locatoins of phase transition boundary as a first step to quantify uncertainty in first principes statistical mechanics framework',
                'details' => 'Computational Materials Science, 186, 110050, 2021',
                'year' => 2021,
            ],
            [
                'authors' => 'Ryan Sperry, Songyang Han, Zhe Chen, Sam Daly, Martin Crimp, David Fullwood',
                'title' => 'Comparison of EBSD, DIC, AFM and ECCI for active slip system identification in deformed Ti-7Al',
                'details' => 'Characterization 173 (2021) 110941',
                'year' => 2021,
            ],
            [
                'authors' => 'Zhihua Huang, Chaoming Yang, John E. Allison, Liang Qi, Amit Misra',
                'title' => 'Dislocation cross-slip in precipitation hardened Mg-Nd alloys',
                'details' => 'Journal of Alloys and Compounds 859 (2021) 157858',
                'year' => 2021,
            ],
            [
                'authors' => 'M Yaghoobi, K. Stopka, A. Lakshmanan, V. Sundararaghavan, J. Allison, D. McDowell',
                'title' => 'PRISMS-Fatigue computational framework for fatigue analysis in polycrystalline metals and alloys',
                'details' => 'npj Computational Materials (2021) 38',
                'year' => 2021,
            ],
            [
                'authors' => 'M. Yaghoobi, Z. Chen, V. Sundararaghavan, S. Daly, J. Allison',
                'title' => 'Crystal plasticity finite element modeling of extension twinning in WE43 Mg alloys: calibration and validation',
                'details' => 'IMMI, 10 (3) (2021) p 488-507',
                'year' => 2021,
            ],
            [
                'authors' => 'J. C. Thomas, A. R. Natarajan, A. Van der Ven',
                'title' => 'Comparing crystal structures with symmetry and geometry',
                'details' => 'NPJ Computational Materials, (2021) 7:164',
                'year' => 2021,
            ],
            [
                'authors' => 'K. Stopka, M. Yaghoobi, J. Allison and D. McDowell',
                'title' => 'Effects of boundary conditions on microstructure-sensitive fatigue analysis',
                'details' => 'IMMI, (2021) p 1-20',
                'year' => 2021,
            ],
            [
                'authors' => 'W. Wu, D. Montiel, J. Guyer, P. Voorhees, J. Warren, D. Wheeler, L. Gransay, T. Pusztai, O. Heinonen',
                'title' => 'Phase field benchmark problems for nucleation',
                'details' => 'Computational Materials Science, 193 (2021) 110371',
                'year' => 2021,
            ],

            // 2020
            [
                'authors' => 'M. Yaghoobi, J.E. Allison, V. Sundararaghavan',
                'title' => 'Multiscale modeling of twinning and detwinning behavior of HCP polycrystals',
                'details' => 'International Journal of Plasticity, 2019',
                'year' => 2020,
            ],
            [
                'authors' => 'A. Githens, S. Ganesan, Z. Chen, J. Allison, V. Sundararaghavan, S. Daly',
                'title' => 'Characterizing Microscale Deformation Mechanisms and Macroscopic Tensile Properties of a High Strength Magnesium Rare-Earth Alloy: A Combined Experimental and Crystal Plasticity Approach',
                'details' => 'Acta Materialia, 186, 77-94, 2020',
                'year' => 2020,
            ],
            [
                'authors' => 'Phani Motamarri, Sambit Das, Shiva Rudraraju, Krishnendu Ghosh, Denis Davydov, Vikram Gavini',
                'title' => 'DFT-FE – a massively parallel adaptive finite-element code for large-scale density functional calculations',
                'details' => 'Computer Physics Communications, 246, 106853, 2020',
                'year' => 2020,
            ],
            [
                'authors' => 'Q. Shi, B. Willians, J. Allison',
                'title' => 'Microstructure Evolution and Precipitation Strengthening in Ca-Containing Mg-Rare Earth Alloys',
                'details' => 'Magnesium Technology, TMS 175-180, 2020',
                'year' => 2020,
            ],
            [
                'authors' => 'Moshen Taheri Andani, Aaditya Lakshmanan, Mohammadreza Karmooz-Raveri, Veera Sundararaghavan, John Allison, Amit Misra',
                'title' => 'A quantitative study of stress fields ahead of a slip band blocked by a grain boundary in unalloyed magnesium',
                'details' => 'Scientific Reports (Nature Research), 10:3084, 2020',
                'year' => 2020,
            ],
            [
                'authors' => 'S. DeWitt, S. Rudraraju, D. Montiel, W.B. Andrews, K. Thornton',
                'title' => 'PRISMS-PF: A General Framework for Phase-Field Modeling Employing a Matrix-Free Finite Element Method',
                'details' => 'npj Computational Materials (Nature), 6:29, 2020',
                'year' => 2020,
            ],
            [
                'authors' => 'Chaoming Yang, Mingfei Zhang, Liang Qi',
                'title' => 'Grain boundary structure search by using an evolutionary algorithm with effective mutation methods',
                'details' => 'Computational Materials Science 184 (2020) 109812',
                'year' => 2020,
            ],
            [
                'authors' => 'Moshen Taheri Andani, Aaditya Lakshmanan, Mohammadreza Karmooz-Raveri, Veera Sundararaghavan, John Allison, Amit Misra',
                'title' => 'Quantitative study of the effect of grain boundary parameters on hte slip system level Hall-Petch slope for basal slip system in Mg-4Al',
                'details' => 'Acta Materialia, 200, 148-161, 2020',
                'year' => 2020,
            ],
            [
                'authors' => 'Z Chen and S Daly',
                'title' => 'Automatic Identification of Deformation Twin Systems in Mg WE43 from SEM DIC',
                'details' => 'Material Characterization, 169, 110628, 2020',
                'year' => 2020,
            ],

            // 2019
            [
                'authors' => 'Aeriel D. Leonard-Murphy, Darren C. Pagan, Armand Beaudoin, Matthew P. Miller, John E. Allison',
                'title' => 'Quantification of Twinning-Detwinning Behavior During Low-Cycle Fatigue of Pure Magnesium Using High Energy X-Ray Diffraction',
                'details' => 'International Journal of Fatigue, 125 (2019) 314-323.  https://doi.org/10.1016/j.ijfatigue.2019.04.011',
                'year' => 2019,
            ],
            [
                'authors' => 'Zhihua Huang, Chaoming Yang, Liang Qi, John E. Allison, Amit Misra',
                'title' => 'Dislocation pile-ups at β1 precipitate interfaces in Mg-rare earth (RE) alloys',
                'details' => 'Materials Science and Engineering A, 742 (2019) 278-286. https://doi.org/10.1016/j.msea.2018.10.104',
                'year' => 2019,
            ],
            [
                'authors' => 'P. Acar, V. Sundararaghavan',
                'title' => 'Stochastic Design Optimization of Microstructural Features using Linear Programming for Robust Material Design',
                'details' => 'AIAA Journal,Vol. 57(1), 2019. DOI: 10.2514/1.J057377',
                'year' => 2019,
            ],
            [
                'authors' => 'P. Acar, V. Sundararaghavan',
                'title' => 'Do Epistemic Uncertainties Allow for Replacing Microstructural Experiments with Reconstruction Algorithms?',
                'details' => 'AIAA Journal, 57(3), 1078-1091, 2019. DOI: 10.2514/1.J057488',
                'year' => 2019,
            ],
            [
                'authors' => 'Mohammadreza Yaghoobi, Sriram Ganesan, Srihari Sundar, Aaditya Lakshmanan, Shiva Rudraraju, John E. Allison, Veera Sundararaghavan',
                'title' => 'PRISMS-Plasticity: An open-source crystal plasticity finite element software',
                'details' => 'Computational Materials Science, 169, 109078, 2019.',
                'year' => 2019,
            ],
            [
                'authors' => 'D. Greeley, M. Yaghoobi, D. Pagan, V. Sundararaghavan and J. Allison',
                'title' => 'Using Synchrotron radiation to improve understanding of deformation of polycrystalline metals by measuring, modeling and publishing 4D information',
                'details' => 'Metal Microstructures in 2D, 3D and 4D, 407h Riso International Symposium on Materials Science, Technical University of Denmark, 2019.',
                'year' => 2019,
            ],
            [
                'authors' => 'A. R. Natarajan and A. Van der Ven',
                'title' => 'Toward an Understanding of Deformation Mechanisms in Metalllic Litium and Sodium from First Principles',
                'details' => 'Chemistry of Materials, 31, 8222-8229, 2019',
                'year' => 2019,
            ],
            [
                'authors' => 'E.L.S. Solomon, A. R. Natarajan, A. Roy, V. Sundararaghavan, A. Van der Ven, E. A. Marquis',
                'title' => 'Stability and strain-driven evolution of β\' precipitation in Mg-Y alloys',
                'details' => 'Acta Materialia, 166 (2019) 148-157. https://doi.org/10.1016/j.actamat.2018.12.026',
                'year' => 2019,
            ],
            [
                'authors' => 'Das, S., Motamarri, P., Gavini, V., Turcksin, B., Li, Y.W., Leback, B.',
                'title' => 'Fast, scalable & accurate finite-element based ab initio calculations using mixed precision computing: 40 PFLOPS simulation of a metallic dislocation system',
                'details' => 'The International Conference for High Performance Computing Networking, Storage,and Analysis, 2019 (ACM Gordon Bell Prize nomination).',
                'year' => 2019,
            ],
            [
                'authors' => 'D. Wheeler, T. Keller, S. DeWitt, A.M. Jokisaari, D. Schwen, J.E. Guyer, L. Aagesen, O.G. Heinonen, M.R. Tonks, P.W. Voorhees, J.A. Warren',
                'title' => 'PFHub – The Phase Field Community Hub',
                'details' => 'Journal of Open Research Software, 2019',
                'year' => 2019,
            ],
            [
                'authors' => 'A. Leondard-Murphy, D. Pagan, A. Beaudoin, M Miller and J.E. Allison',
                'title' => 'Quantification of cyclic twinning-detwinning behavior during low cycle fatigue of pure Mg using high energy X-Ray Diffraction',
                'details' => 'International Journal of Fatigue, 125, 314-323, 2019',
                'year' => 2019,
            ],

            // 2018
            [
                'authors' => 'S. DeWitt and K. Thornton',
                'title' => 'Phase Field Modeling of Microstructural Evolution” Computational Materials System Design',
                'details' => 'D. Shin and J. Saal, Eds., Springer Nature, London, (2018)',
                'year' => 2018,
            ],
            [
                'authors' => 'L.K. Aagesen, J. Miao, J. E. Allison, S. Aubry, A. Arsenlis',
                'title' => 'Prediction of Precipitation Strengthening in the Commercial Mg Alloy AZ91 Using Dislocation Dynamics',
                'details' => 'Metallurgical and Materials Trans.Vol 49 (5) pp. 1908-1915 (2018).',
                'year' => 2018,
            ],
            [
                'authors' => 'Aeriel D. Murphy and John E. Allison',
                'title' => 'The Recrystallization Behavior of Unalloyed Mg and a Mg-Al Alloy',
                'details' => 'Metallurgical and Materials Transactions, Vol 49 (5) 1492-1508 (2018)',
                'year' => 2018,
            ],
            [
                'authors' => 'Zhihua Huang, John E. Allison and Amit Misra',
                'title' => 'Interaction of Glide Dislocations with Extended Precipitates in Mg-Nd alloys',
                'details' => 'Scientific Reports, Article number: 3570 (2018).',
                'year' => 2018,
            ],
            [
                'authors' => 'J. Luo, A. Ramazani, V. Sundararaghavan',
                'title' => 'Simulation of Micro-Scale Shear Bands Using Peridynamics with an Adaptive Dynamic Relaxation Method',
                'details' => 'International Journal of Solids and Structures, 130, pp.36-48, 2018.',
                'year' => 2018,
            ],
            [
                'authors' => 'S. Panwar, J. Adams, J. Allison, J. W. Jones, V. Sundararaghavan',
                'title' => 'A grain boundary interaction model for microstructurally short fatigue cracks',
                'details' => 'International Journal of Fatigue 111 (2018) 323-333.',
                'year' => 2018,
            ],

            // 2017
            [
                'authors' => 'S. Rudraraju, A. J. Shaw, J. P. Boyd and K. Garikipati',
                'title' => 'A Shanmugadhasan canonical transformation for sorting out physics from gauge structure in gravitational dynamics',
                'details' => 'J. Comp. Phys. 344 (2017) 62–95.',
                'year' => 2017,
            ],
            [
                'authors' => 'L. K. Aagesen and E. A. Marquis',
                'title' => 'Uptake of solute into solution beyond the solvus',
                'details' => 'Ultramicroscopy 180 (2017) 156-169.',
                'year' => 2017,
            ],
            [
                'authors' => 'William Bennett, Wei Xie,  Douglas Allaire,  Matthew Brake,  Kenneth M. Liechty, Paul Allen',
                'title' => 'An Uncertainty Quantification and Model Validation Benchmark for Aeroelastic Limit Cycle Oscillations',
                'details' => 'ASME Journal of Computational and Nonlinear Dynamics, 2017, Vol. 12.',
                'year' => 2017,
            ],
            [
                'authors' => 'A. Van der Ven, J. C. Thomas, B. Puchala and A.R. Natarajan',
                'title' => 'Methodology for accessing, from first principles, temperature-composition phase diagrams of random substitutional alloys',
                'details' => 'Phys. Rev. B 93, 134203, (2017).',
                'year' => 2017,
            ],
            [
                'authors' => 'S. Rudraraju, Z. Wang and K. Garikipati',
                'title' => 'A three dimensional field formulation, and isogeometric solutions to point and line defects using Toupin\'s theory of gradient elasticity at finite strains',
                'details' => 'Computer Methods in Applied Mechanics and Engineering (CMAME), 321, pp. 165-187 (2017).',
                'year' => 2017,
            ],
            [
                'authors' => 'L. K. Aagesen and E. A. Marquis',
                'title' => 'Probability calculations enabling quantitative atom probe tomography',
                'details' => 'Microscopy and Microanalysis 23 (4), 2017, 551-564.',
                'year' => 2017,
            ],

            // 2016
            [
                'authors' => 'S. Ganesan, A. Githens, Z. Chen, V. Sundararaghavan, S. Daly',
                'title' => 'Rotational Digital Image Correlation (RDIC): feedback-corrected precision measurements of roations for validation of crystal plasticity models',
                'details' => 'Experiments in Mechanics, 2016',
                'year' => 2016,
            ],
            [
                'authors' => 'Zhenlin Wang, Shiva Rudraraju and Krishna Garikipati',
                'title' => 'A Three-Dimensional Field Formulation, and Isogeometric Solutions to Point and Line Defect Cores Using Toupin\'s Theory of Gradient Elasticity at Finite Strains',
                'details' => 'Journal of the Mechanics and Physics of Solids, 2016. doi:10.1016/j.jmps.2016.11.012',
                'year' => 2016,
            ],
            [
                'authors' => 'Gregory Teichert, Krishna Garikipati',
                'title' => 'Microstructure Change and Interface Motion As Problems of Evolving Material Configurations',
                'details' => 'in press, 2016',
                'year' => 2016,
            ],
            [
                'authors' => 'S. Rudraraju, K. Sagiyama and K. Garikipati',
                'title' => 'A comparative study of the Gurson and phase-field models of ductile fracture, and their numerical implementations',
                'details' => 'Computational Mechanics, 2016. doi:10.1007/s00466-016-1331-x',
                'year' => 2016,
            ],
            [
                'authors' => 'S. Rudraraju and K. Garikipati',
                'title' => 'A continuum theory of dislocation interactions: Voce\'s law and Taylor hardening',
                'details' => 'Journal of the Mechanics and Physics of Solids (JMPS), 2016. doi:10.1016/j.jmps.2016.11.013',
                'year' => 2016,
            ],
            [
                'authors' => 'S. Rudraraju and K. Garikipati',
                'title' => 'A Unified Treatment of Elasticity, Diffusion and Growth in Finite Strains: Examples of Biological Growth and Structural Alloys',
                'details' => 'in revision, 2016',
                'year' => 2016,
            ],
            [
                'authors' => 'A.M. Jokisaari, J.E. Guyer, D.Y. Voorhees, O.G. Heinonen, P.W. Voorhees',
                'title' => 'Phase Field Model of Dislocation-Pin Interactions',
                'details' => 'Computational Materials Science, 2016. DOI: 10.1016/j.commatsci.2016.08.015',
                'year' => 2016,
            ],
            [
                'authors' => 'S.R. Patil, B. Puchala (contact)',
                'title' => 'Finite element implementation of the phase-field method for diffusion mediated transformations and microstructure evolution',
                'details' => 'IJPVP special issue on Phase-Field modeling (2016).',
                'year' => 2016,
            ],
            [
                'authors' => 'S. Rudraraju, K. Sagiyama, J. Rudraraju, K. Garikipati',
                'title' => 'A Decomposition Approach for Open Source Continuum Modeling of Fracture and Growth',
                'details' => 'in preparation 2016.',
                'year' => 2016,
            ],
            [
                'authors' => 'G. Teichert, S. Rudraraju, K. Garikipati',
                'title' => 'A Variational Method for Microstructure Change and Interface Motion',
                'details' => 'in preparation 2016.',
                'year' => 2016,
            ],
            [
                'authors' => 'G. Teichert, S. Rudraraju, V. Ferdowsi, K. Garikipati',
                'title' => 'Linking the Behaviors of Composite Materials at Several Scales: Three Examples in Carbon Fiber Composites and Granular Media',
                'details' => 'in preparation 2016.',
                'year' => 2016,
            ],
            [
                'authors' => 'A. Mei, K.A.N. Marasinghe, W. J. Hannon, P. Chinnusamy, S. Knight, K. M. Knott, P. R. Vaccaro, C.W. Rosenthal',
                'title' => 'O-band (1260-1360 nm) silicon waveguide resonances of isolated and weakly-coupled thermal kinetic inductance detectors (TKIDs)',
                'details' => 'Springer Journal of Infrared, Millimeter and Terahertz Waves, 2016',
                'year' => 2016,
            ],
            [
                'authors' => 'K.S. Alam, K. G.Armani, R. K. Chang, C.W. Rosenthal',
                'title' => 'Optical fiber coupling to optical cavities: distributed Bragg reflector (DBR) and dielectric microsphere resonators',
                'details' => 'Frontiers in Frontiers in Materials; DOI:10.3389/fmats.2016.00031',
                'year' => 2016,
            ],
            [
                'authors' => 'G. Teichert, K. Garikipati',
                'title' => 'Frontiers in Mathematical Modeling of Soft Matter',
                'details' => 'AIP Advances, 6(12), 120701, 2016.',
                'year' => 2016,
            ],
            [
                'authors' => 'D.E. Belski, K. P. Kelly, C.W. Rosenthal',
                'title' => 'Sparse Complex wavelet description of pharyngeal waveform during deglutition',
                'details' => 'Springer Journal of Medical & Biological Engineering & Computing, 2016.',
                'year' => 2016,
            ],
            [
                'authors' => 'M. Iyer, B. Radhakrishnan, V. Gavini',
                'title' => 'Electronic structure study of an edge dislocation in aluminum and the role of macroscopic deformations on its energetics',
                'details' => 'Journal of the Mechanics and Physics of Solids, 2016',
                'year' => 2016,
            ],

            // 2015
            [
                'authors' => 'M. Iyer, B. Radhakrishnan, V. Gavini',
                'title' => 'Electronic structure study of an edge dislocation in aluminum and the role of macroscopic deformations on its energetics',
                'details' => 'J. Mech. Phys. Solids  76 (2015) 260-275.',
                'year' => 2015,
            ],
            [
                'authors' => 'E. Sitzmann and E. A. Marquis',
                'title' => 'Chemistry and morphology of B\' precipitates in an aged Mg-Nd-Y-Zr alloy',
                'details' => '95(1) 7-13, Philosophical Magazine Letters, (2015).',
                'year' => 2015,
            ],
            [
                'authors' => 'Sambit Das, Mrinal Iyer, Vikram Gavini',
                'title' => 'Real-space formulation of orbital-free density functional theory using finite-element discretization: The case for Al, Mg, and Al-Mg intermetallics',
                'details' => 'Phys. Rev. B 92, 014104 (2015).',
                'year' => 2015,
            ],

            // 2014
            [
                'authors' => 'S. Rudraraju, A. Van der Ven and K. Garikipati',
                'title' => 'Three-dimensional iso-geometric solutions to general boundary value problems of Toupin’s gradient elasticity theory at finite strains',
                'details' => 'Comp. Meth. App. Mech. Engrg. (CMAME) 278 (2014) 705-728.',
                'year' => 2014,
            ],
            [
                'authors' => 'P. Motamarri, V. Gavini',
                'title' => 'A subquadratic-scaling subspace projection method for large-scale Kohn-Sham DFT calculations using spectral finite-element discretization',
                'details' => 'Phys. Rev. B 90 115127 (2014).',
                'year' => 2014,
            ],

            // 2013
            [
                'authors' => 'V. Sundararaghavan, S. Sun',
                'title' => 'Modeling crack propagation in polycrystalline alloys using a variational multiscale cohesive method',
                'details' => '2nd World Congress on Integrated Computational Materials Engineering (Edited by M. Li et. al.), Wiley, New York, p. 225-230, 2013.',
                'year' => 2013,
            ],
        ]);
    }
}
