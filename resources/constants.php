<?php

class Constants {

    const DATABASE = 'mineralogy';
    const USER = 'user';
    const LOCAL = 'localhost';
    const PASSWD = '';
    const TABLE_GENERAL = 'general';
    const TABLE_PHYSICAL = 'physical';
    const TABLE_OPTICAL = 'optical';
    const TABLE_CHRYST = 'crhystalline';
    
    const NAME = 'name';
    const COMPOSITION = 'composition';
    const CLASSES = 'classes';
    const SUBCLASSES = 'subclasses';
    const GROUPS = 'groups';
    const SUBGROUPS = 'subgroups';
    const OCCURRENCE = 'occurrence';
    const ASSOCIATION = 'association';
    const DISTINCTION = 'distinction';
    const APPLICATIONS = 'applications';
    
    const HARD_MIN = 'hard_min';
    const HARD_MAX = 'hard_max';
    const DENS_MIN = 'dens_min';
    const DENS_MAX = 'dens_max';
    const COLOR = 'color';
    const STREAK = 'streak';
    const BRIGHTNESS = 'brightness';
    const CLEAVAGE = 'cleavage';
    const FRACTURE  = 'fracture';
    const MAGNETISM = 'magnetism';
    const LUMINESCENCE  = 'luminescence';

    const SIGN = 'sign';
    const SIGN_DESC = 'sign_desc';
    const BIRR_MAX = 'birr_max';
    const BIRR_DESC = 'birr_desc';
    const REFRACTION= 'refraction';
    const COLOR_BLADE = 'color_blade';
    const ELONGATION = 'elongation';
    const RELIEF = 'relief';
    const ANGLE2V = 'angle2V';
    const EXTINCTION = 'extinction';
    const INTERFERENCE = 'interference';
    
    public static function getDatabase() {
        return self::DATABASE;
    }

    public static function getUser() {
        return self::USER;
    }
    public static function getLocal() {
        return self::LOCAL;
    }
    public static function getPasswd() {
        return self::PASSWD;
    }
    public static function getTableGeneral() {
        return self::TABLE_GENERAL;
    }
    public static function getTablePhysical() {
        return self::TABLE_PHYSICAL;
    }
    public static function getTableOptical() {
        return self::TABLE_OPTICAL;
    }
    public static function getName() {
        return self::NAME;
    }
    public static function getComposition() {
        return self::COMPOSITION;
    }
    public static function getClasses(){
        return self::CLASSES;
    }
    public static function getSubclasses(){
        return self::SUBCLASSES;
    }
    public static function getGroups(){
        return self::GROUPS;
    }
    public static function getSubgroups(){
        return self::SUBGROUPS;
    }
    public static function getOccurrence(){
        return self::OCCURRENCE;
    }
    public static function getAssociation(){
        return self::ASSOCIATION;        
    }
    public static function getDistinction(){
        return self::DISTINCTION;
    }
    public static function getApplications(){
        return self::APPLICATIONS;
    }
    public static function getHardMin(){
        return self::HARD_MIN;
    }
    public static function getHardMax(){
        return self::HARD_MAX;
    }
    public static function getDensMin(){
        return self::DENS_MIN;
    }
    public static function getDensMax(){
        return self::DENS_MAX;
    }
    public static function getColor(){
        self::COLOR;
    }
    public static function getStreak(){
        self::STREAK;
    }
    public static function getBrightness(){
        return self::BRIGHTNESS;
    }
    public static function getCleavage(){
        return self::CLEAVAGE;
    }
    public static function getFracture(){
        return self::FRACTURE;
    }
    public static function getMagnetism(){
        return self::MAGNETISM;
    }
    public static function getLuminescence(){
        return self::LUMINESCENCE;
    }
    public static function getSign(){
        return self::SIGN;
    }
    public static function getSignDesc(){
        return self::SIGN_DESC;
    }
    public static function getBirrMax(){
        return self::BIRR_MAX;
    }
    public static function getBirrDesc(){
        return self::BIRR_DESC;
    }
    public static function getRefraction(){
        return self::REFRACTION;
    }
    public static function getColorBlade(){
        return self::COLOR_BLADE;
    }
    public static function getElongation(){
        return self::ELONGATION;
    }
    public static function getRelief(){
        return self::RELIEF;
    }
    public static function getAngle(){
        return self::ANGLE2V;
    }
    public static function getExtinction(){
        return self::EXTINCTION;
    }
    public static function getInterference(){
        return self::INTERFERENCE;
    }
}
