# Activitat guiada amb IA - Codi Llibreria

Aquesta llibreria forma part de les tasques del Lab 4. Cada canvi ha de tenir targeta, prompt, pla IA, PR, proves i revisió crítica.

## Nivell de guia

**Nivell 4 - Contractes propis.** La feina parteix del contracte HTTP. La IA no pot inventar accés directe a BD ni saltar-se la separació front/back/vendor.

## Entrega per cada tasca

- **Descripció funcional:** què s'ha de fer i per què aporta valor al projecte.
- **Prompt utilitzat:** prompt inicial i prompts de refinament, si n'hi ha.
- **Pla generat per la IA:** pla complet o resum si l'eina no el guarda.
- **Link al PR:** URL del PR amb els commits associats. Pot estar obert o merged.
- **Joc de proves:** serialització, deserialització, JSON d'entrada/sortida, errors esperats o proves d'integració amb el back.
- **Revisió crítica:** què ha fet bé la IA, què heu hagut de corregir i quines decisions són vostres.

## Tasques suggerides

1. Definir `RequestDTO`, `ResponseDTO` i DTOs d'entitat.
2. Implementar un repositori HTTP del vendor.
3. Revisar namespaces, Composer autoload i serialització.

## Recordatori

La llibreria no accedeix directament a la base de dades. Ha de parlar amb el back a través del contracte HTTP.
