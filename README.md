# Kanban Board Application

A tiny Trello-style Kanban board application built using Laravel (API) and React (Frontend).

## Features
- **Board Management**: View and manage Kanban tasks.
- **Task Tracking**: Cards are categorized into Pending, In Progress, and Done.
- **Dynamic Updates**: Real-time rendering via API integration.

## Models Used
- **Orchestrator (Brain)**: [Insert Model, e.g., Groq openai/gpt-oss-120b]
- **Coding Agent (Hands)**: [Insert Model, e.g., Ollama qwen2.5-coder]

## Run Instructions

### Backend (Laravel API)
1. Navigate to the `kanban-api` folder.
2. Run `composer install`.
3. Start the server: `php artisan serve`.
4. The API will be available at `http://127.0.0.1:8000`.

### Frontend (React UI)
1. Ensure the backend server is running.
2. Open `index.html` in your browser.
3. The interface will fetch tasks directly from the API endpoint.

## Live URL
[Insert your deployed live URL here]