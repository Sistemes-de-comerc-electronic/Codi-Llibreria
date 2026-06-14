# Activitat guiada amb IA - Codi Llibreria

Aquest repositori és el punt de partida per definir DTOs i repositoris compartits entre front i back. La IA pot ajudar-vos a dissenyar el contracte, però heu de fer explícites les responsabilitats de la llibreria.

## Què heu de fer

1. Feu un prompt per descriure quin mètode de l'API voleu consumir.
2. Feu un prompt per definir `RequestDTO`, `ResponseDTO` i DTOs d'entitat.
3. Feu un prompt per implementar el repositori sense posar-hi lògica de BD.
4. Feu un prompt per revisar noms, namespaces i serialització.
5. Feu un prompt de depuració si falla Composer, autoload o la deserialització.

## INPUTS per Moodle

- Prompt de contracte funcional.
- Prompt de DTOs amb camps i justificació.
- Prompt de repositori amb URL, headers i serialització.
- Prompt de revisió crítica.
- Error trobat i prompt de depuració, si escau.

## Recordatori

La llibreria no ha d'accedir directament a la base de dades. Ha de parlar amb el back a través del contracte HTTP.
