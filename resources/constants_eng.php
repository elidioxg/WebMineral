<?php

class Strings {
    const STR_NAME = 'Mineral Name';
    const STR_COMPOSITION = 'Compostion';
    const STR_CLASSES = 'Classes';
    const STR_SUBCLASSES = 'Subclasses';
    const STR_GROUPS = 'Groups';
    const STR_SUBGROUPS = 'Subgroups';
    const STR_OCCURRENCE = 'Occurrence';
    const STR_ASSOCIATION = 'Association';
    const STR_DISTINCTION = 'Distinction';
    const STR_APPLICATIONS = 'Applications';
    
    const STR_HARD_MIN = 'Min Hardness';
    const STR_HARD_MAX = 'Max Hardness';
    const STR_DENS_MIN = 'Min Density';
    const STR_DENS_MAX = 'Max Density';
    const STR_COLOR = 'Color';
    const STR_STREAK = 'Streak';
    const STR_BRIGHTNESS = 'Brightness';
    const STR_CLEAVAGE = 'Cleavage';
    const STR_FRACTURE  = 'Fracture';
    const STR_MAGNETISM = 'Magnetism';
    const STR_LUMINESCENCE  = 'Luminescence';

    const STR_SIGN = 'Optic Sign';
    const STR_SIGN_DESC = 'Optic Sign Description';
    const STR_BIRR_MAX = 'Max Birrefringence';
    const STR_BIRR_DESC = 'Birrefringence';
    const STR_REFRACTION= 'Refraction Index';
    const STR_COLOR_BLADE = 'Color Blade';
    const STR_ELONGATION = 'Elongation';
    const STR_RELIEF = 'Relief';
    const STR_ANGLE2V = 'Angle 2V';
    const STR_EXTINCTION = 'Extinction';
    const STR_INTERFERENCE = 'Interference Color';
    
    public static function getName(){
        return self::STR_NAME;
    }
    public static function getComposition(){
        return self::STR_COMPOSITION;
    }
    public static function getClasses(){
        return self::STR_CLASSES;
    }
    public static function getSubclasses(){
        return self::STR_SUBCLASSES;
    }
    public static function getGroups(){
        return self::STR_GROUPS;
    }
    public static function getSubgroups(){
        return self::STR_SUBGROUPS;
    }
    public static function getOccurrence(){
        return self::STR_OCCURRENCE;
    }
    public static function getAssociation(){
        return self::STR_ASSOCIATION;
    }
    public static function getDIstinction(){
        return self::STR_DISTINCTION;
    }
    public static function getApplications(){
        return self::STR_APPLICATIONS;
    }    
    public static function getHardMin(){
        return self::STR_HARD_MIN;
    }
    public static function getHardMax(){
        return self::STR_HARD_MAX;
    }
    public static function getDensMin(){
        return self::STR_DENS_MIN;
    }
    public static function getDensMax(){
        return self::STR_DENS_MAX;
    }
    public static function getColor(){
        return self::STR_COLOR;
    }
    public static function getStreak(){
        return self::STR_STREAK;
    }
    public static function getBright(){
        return self::STR_BRIGHTNESS;
    }
    public static function getCleavage(){
        return self::STR_CLEAVAGE;
    }
    public static function getFracture(){
        return self::STR_FRACTURE;
    }
    public static function getMagnetism(){
        return self::STR_MAGNETISM;
    }
    public static function getLuminescence(){
        return self::STR_LUMINESCENCE;
    }
    public static function getOpticSign(){
        return self::STR_SIGN;
    }
    public static function getOpticSignDesc(){
        return self::STR_SIGN_DESC;
    }
    public static function getBirrMax(){
        return self::STR_BIRR_MAX;
    }
    public static function getBirr(){
        return self::STR_BIRR_DESC;
    }
    public static function getRefraction(){
        return self::STR_REFRACTION;
    }
    public static function getColorBlade(){
        return self::STR_COLOR_BLADE;
    }
    public static function getElongation(){
        return self::STR_ELONGATION;
    }
    public static function getRelief(){
        return self::STR_RELIEF;
    }
    public static function getAngle2V(){
        return self::STR_ANGLE2V;
    }
    public static function getInterference(){
        return self::STR_INTERFERENCE;
    }
    public static function getExtinction(){
        return self::STR_EXTINCTION;
    }
    
}