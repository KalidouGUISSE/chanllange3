<?php
namespace Core;

class ValidatorStatic {
    private static array $errors = [];

    /**
     * Vérifie si une valeur est vide
     */
    public static function isEmpty(string $key, $value, string $message = "Ce champ est obligatoire.") {
        if (empty(trim($value))) {
            self::addError($key, $message);
        }
    }

    /**
     * Vérifie si une valeur est un email valide
     */
    public static function isEmail(string $key, $value, string $message = "Email invalide.") {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            self::addError($key, $message);
        }
    }

    /**
     * Ajoute une erreur à la liste
     */
    public static function addError(string $key, string $message) {
        self::$errors[$key][] = $message;
    }

    /**
     * Retourne toutes les erreurs
     */
    public static function getErrors(): array {
        return self::$errors;
    }

    /**
     * Indique s’il y a des erreurs ou non
     */
    public static function isValid(): bool {
        return empty(self::$errors);
    }
}
