-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2016 at 01:11 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `incomplete`
--

CREATE TABLE `incomplete` (
  `incompleteID` int(11) NOT NULL,
  `date` date NOT NULL,
  `projectTitle` varchar(30) NOT NULL,
  `principalInvestigator` varchar(30) NOT NULL,
  `coprincipalnvestigators` varchar(200) NOT NULL,
  `principalInvestigatorDept` varchar(30) NOT NULL,
  `principalInvestigatorPhone` int(14) NOT NULL,
  `principalInvestigatorEmail` varchar(30) NOT NULL,
  `principalInvestigatorFax` int(14) NOT NULL,
  `externalGrant` varchar(200) NOT NULL,
  `hsrcExemption` varchar(200) NOT NULL,
  `demographicA` varchar(200) NOT NULL,
  `demographicB` varchar(200) NOT NULL,
  `demographicC` varchar(200) NOT NULL,
  `demographicD` varchar(200) NOT NULL,
  `informedConsent` mediumblob NOT NULL,
  `demographicF` varchar(200) NOT NULL,
  `demographicG` int(200) NOT NULL,
  `Risk` enum('Deception of the participant?','Punishment of the participant?','Materials commonly regarded as socially unacceptable such as pornography, inflammatory text, ethnic portrayals?','Any other procedure that might be considered to be an invasion of privacy?','Disclosure of the name of individual participants?','Any other physically invasive procedure?') NOT NULL,
  `RiskYes` varchar(200) NOT NULL,
  `ConfidentialityA` varchar(200) NOT NULL,
  `ConfidentialityB` varchar(200) NOT NULL,
  `ConfidentialityCi` varchar(200) NOT NULL,
  `confidentialityCii` varchar(200) NOT NULL,
  `confidentialityCiii` varchar(200) NOT NULL,
  `BenefitsA` varchar(200) NOT NULL,
  `BenefitsB` varchar(200) NOT NULL,
  `researchProposal` varchar(30) NOT NULL,
  `researchProposalNo` varchar(200) DEFAULT NULL,
  `summary` varchar(30) NOT NULL,
  `consentAgreements` varchar(30) NOT NULL,
  `instruments` varchar(30) NOT NULL,
  `flyers` varchar(30) NOT NULL,
  `exclusion` varchar(200) DEFAULT NULL,
  `extension` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incomplete`
--
ALTER TABLE `incomplete`
  ADD PRIMARY KEY (`incompleteID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `incomplete`
--
ALTER TABLE `incomplete`
  MODIFY `incompleteID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
