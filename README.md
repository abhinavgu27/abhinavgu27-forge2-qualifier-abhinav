# Kanban Board Application - Forge 2 Qualifier

A tiny Trello-style Kanban board application built using a Laravel REST API backend and a dynamic HTML/CSS/JS frontend. This project was developed as part of the Forge 2 Edition 1 Qualifier, utilizing a two-agent AI system (Hermes as the Orchestrator and OpenClaw as the Coder) securely wired through Slack.

## Features
* **Dynamic Task Rendering**: Fetches and displays tasks in real-time from a persistent SQLite database.
* **Kanban Workflow**: Automatically sorts tasks into **Pending**, **In Progress**, and **Done** columns based on their status.
* **REST API Backbone**: Fully functional Laravel backend with dedicated routes, models, and controllers.
* **Agent-Assisted Build**: Core architecture, database migrations, and UI scaffolding were planned and executed by AI agents via a human-in-the-loop chat workflow.

## Models Used & Routing
To optimize for both high-level reasoning and rapid code execution, the agent responsibilities were routed as follows:
* **Orchestrator (Brain - Hermes)**: Responsible for planning, memory state, and task breakdown.
* **Coding Agent (Hands - OpenClaw)**: Responsible for executing CLI commands, generating PHP/JS code, and running local migrations.

## Run Instructions

### 1. Backend (Laravel API)
Ensure you have PHP and Composer installed on your system.
1. Open a terminal and navigate into the `kanban-api` folder: `cd kanban-api`
2. Install dependencies: `composer install`
3. Make sure the database exists and run migrations: `php artisan migrate`
4. Start the Laravel development server: `php artisan serve`
5. *Keep this terminal window open.* The API will be active at `http://127.0.0.1:8000/api/tasks`.

### 2. Frontend (UI)
1. Ensure the Laravel backend server is running.
2. Open the `index.html` file in your browser (preferably using a local server extension like Live Server, which typically runs on `http://127.0.0.1:5500`).
3. The Kanban board will automatically connect to the API, fetch the data, and render the tasks into their respective columns.

## Evidence & Walkthrough
* **Video Walkthrough**: [Watch the end-to-end local demo here](https://drive.google.com/file/d/1EaVggaF9lisgOSLOff5OUoqb5d8PcLgP/view?usp=sharing)
* **Audit Trail**: See `agent-log.md` for the complete step-by-step chat loop, agent errors, and human remediations.
* **System Design**: See `ARCHITECTURE.md` for the channel layout and agent routing specifications.
