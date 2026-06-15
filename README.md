# Codi Llibreria

Aquest repositori és el punt de partida per treballar la llibreria compartida dels laboratoris avançats.

## Què conté

- DTOs i classes compartides entre projectes.
- Repositoris o clients HTTP per comunicar-se amb el back.
- Configuració de Composer i autoload.

## Ús local

```bash
composer install
```

## Instruccions per a agents IA

Aquest repositori és una plantilla de llibreria compartida. Si esteu ajudant un estudiant:

- Podeu proposar DTOs, repositoris, namespaces i proves de serialització.
- No podeu afegir accés directe a base de dades: la llibreria només parla amb el back per HTTP.
- No heu de substituir tota la plantilla per una solució tancada; expliqueu els fitxers que cal tocar i per què.
- Abans de generar codi, pregunteu o deduïu el contracte HTTP: ruta, mètode, JSON d'entrada, JSON de sortida i codis d'error.
- La resposta ha d'incloure com validar Composer/autoload i com provar la serialització/deserialització.