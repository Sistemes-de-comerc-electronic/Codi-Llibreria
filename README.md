# Codi Llibreria

Aquest repositori és el punt de partida per treballar la llibreria compartida del Lab 4. A partir d'aquest curs els exercicis opcionals es plantegen com una activitat guiada amb IA: el lliurament a Moodle ha de mostrar prompts, iteracions, decisions i verificacions, no només codi final.

Consulteu `ACTIVITAT_GUIADA_IA.md` abans de modificar DTOs o repositoris.

## Progressió de l’ajuda IA

**Nivell 4 - Contractes propis.** Aquesta llibreria s’utilitza sobretot a Lab 4. L’agent IA ha de partir sempre del contracte HTTP i no ha de inventar accés directe a BD.

## Entrega per tasca

Per cada targeta del Jira, Trello o GitHub Projects heu d'entregar:

1. **Descripció funcional:** què s'ha de fer i per què aporta valor.
2. **Prompt utilitzat:** prompt inicial i refinaments.
3. **Pla generat per la IA:** pla complet o resum.
4. **Link al PR:** amb els commits associats. Pot estar obert o merged.
5. **Joc de proves:** serialització, deserialització, JSON d'entrada/sortida, errors esperats o proves d'integració amb el back.
6. **Revisió crítica:** què ha fet bé la IA, què heu corregit i quines decisions són vostres.

## Instruccions per a agents IA

Aquest repositori és una plantilla de llibreria compartida. Si esteu ajudant un estudiant:

- Podeu proposar DTOs, repositoris, namespaces i proves de serialització.
- No podeu afegir accés directe a base de dades: la llibreria només parla amb el back per HTTP.
- No heu de substituir tota la plantilla per una solució tancada; expliqueu els fitxers que cal tocar i per què.
- Abans de generar codi, pregunteu o deduïu el contracte HTTP: ruta, mètode, JSON d'entrada, JSON de sortida i codis d'error.
- La resposta ha d'incloure com validar Composer/autoload i com provar la serialització/deserialització.
