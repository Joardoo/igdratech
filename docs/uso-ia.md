# Declaración del uso de la IA

> Borrador de trabajo: se irá completando durante el desarrollo y se resumirá para la entrega
> (herramientas, para qué y 2-3 prompts representativos).

## Herramientas

| Herramienta | Modelo | Para qué |
|---|---|---|
| Claude Code (app de escritorio de Claude) | Claude Opus 5.5 | Tutor paso a paso: explicar conceptos de Angular y Laravel, comprobar versiones, revisar el código que escribo y proponer mensajes de commit. Redactar la documentación. |

| Laravel Boost | (paquete de desarrollo de Laravel) | Da a Claude Code las convenciones de Laravel 13 (`backend/CLAUDE.md`, `backend/.claude/skills/`) y un servidor MCP para consultar la documentación de la versión instalada, la base de datos y los logs. |

## Criterio de uso

- El código lo escribo yo; la IA explica, revisa y sugiere mejoras.
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
