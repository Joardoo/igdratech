# Declaración del uso de la IA

## Herramientas

| Herramienta | Modelo | Para qué |
|---|---|---|
| Claude Code (app de escritorio de Claude) | Claude Opus 5.5 | Escribir el código en pasos pequeños explicándome cada concepto y la sintaxis, comprobar versiones, proponer mensajes de commit y redactar la documentación. |
| ChatGPT | — | Generar el logo de IgdraTech. Las versiones con fondo transparente para la web las preparó Claude a partir de ese original. |
| Angular CLI (`--ai-config=claude-code`) | — | Al crear el proyecto Angular generó `frontend/CLAUDE.md` con las buenas prácticas de Angular 22, que Claude Code carga cuando trabaja con los archivos de `frontend/`. |
| Laravel Boost | (paquete de desarrollo de Laravel) | Generó `backend/CLAUDE.md` con las convenciones de Laravel 13, que Claude Code carga cuando trabaja con los archivos de `backend/`. |

Angular CLI y Laravel Boost también configuran un servidor MCP (en `frontend/.mcp.json` y
`backend/.mcp.json`) para que Claude Code consulte la documentación de la versión instalada y, en el
caso de Boost, también la base de datos y los logs. No llegaron a usarse: Claude Code solo lee el
`.mcp.json` de la carpeta en la que se abre, y yo lo abría siempre en la raíz del repositorio. Por
el mismo motivo tampoco se usaron las skills que Boost instala en `backend/.claude/skills/`.

## Criterio de uso

- El código lo escribe Claude, pero en pasos pequeños: antes de cada cambio me explica qué va a hacer
  y por qué, y después la sintaxis de lo que ha escrito. Yo lo leo, lo pruebo en el navegador y hago
  los commits, de modo que cada commit es un cambio que entiendo y puedo defender.
- Al principio la regla era que yo escribiera el código siguiendo sus indicaciones. La cambié el
  segundo día: copiar a mano no me hacía entender más, y lo importante es saber explicar y modificar
  cada archivo.
- La documentación (el README y este archivo) la ha redactado Claude a partir de mis indicaciones,
  para ahorrar tiempo escribiendo. Yo la reviso y la corrijo antes de cada commit.
- Las versiones de Angular, Laravel y Bootstrap se comprobaron en fuentes oficiales (npm, Packagist, documentación), no a partir de la memoria del modelo.

## Registro de prompts

### 1. Contexto inicial y forma de trabajar (2026-11-05)

**Objetivo:** dar a la IA el enunciado, los datos reales de la empresa y fijar que actúe como tutor en lugar de generar el proyecto.

**Prompt (resumido):**

> Vamos a trabajar juntos en una prueba técnica. No domino Angular ni Laravel, así que haz de tutor paso
> a paso: antes de cada paso explícame qué vamos a hacer y por qué; luego yo escribo el código y ejecuto
> los comandos, y tú revisas lo que he hecho. No generes el proyecto entero de golpe. Los commits los hago
> yo. [Enunciado, datos de IgdraTech y RemoteInventy, arquitectura propuesta y plan.] Antes de crear nada,
> comprueba cuáles son las últimas versiones estables de Angular y Laravel; no te fíes de lo que recuerdes.

**Resultado y criterio:** la IA comprobó las versiones (Laravel 13.40, que pide PHP 8.3 o superior;
Angular 22.2; Bootstrap 5.3.8) y propuso cómo instalar el entorno y cómo integrar Angular con Laravel.
Las decisiones finales las tomé yo después de revisar las opciones.

### 2. Cambio en la forma de trabajar (2026-11-06)

**Prompt:**

> No me acaba de convencer la regla de que yo escriba todo el código. Vamos a cambiar de sistema: el
> código lo escribes tú, pero poco a poco, sin introducir grandes cambios de golpe, explicándome los
> pasos y la sintaxis para que yo lo entienda. Los commits los seguiré haciendo yo.

**Resultado y criterio:** a partir de aquí la IA escribe el código en cambios pequeños y explicados,
y yo controlo el ritmo con los commits. Así el historial sigue reflejando pasos que he revisado uno
a uno.
