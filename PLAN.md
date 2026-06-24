## Kanban Application Plan

This plan outlines the development of a Trello-style Kanban application with a Laravel API (SQLite) backend and a React (Vite) frontend.

### 1. Entities

*   **Board**: Represents a Kanban board.
    *   `id` (PK)
    *   `name`
    *   `description`
*   **List**: Represents a column within a Board (e.g., "To Do", "In Progress", "Done").
    *   `id` (PK)
    *   `board_id` (FK to Board)
    *   `name`
    *   `order`
*   **Card**: Represents a task or item within a List.
    *   `id` (PK)
    *   `list_id` (FK to List)
    *   `title`
    *   `description`
    *   `due_date` (nullable datetime)
    *   `order`
*   **Tag**: Categorization for Cards.
    *   `id` (PK)
    *   `name`
    *   `color` (optional)
*   **Member**: Represents a user who can be assigned to Cards.
    *   `id` (PK)
    *   `name`
    *   `email`
*   **Card_Tag** (Pivot Table): Many-to-many relationship between Card and Tag.
    *   `card_id`
    *   `tag_id`
*   **Card_Member** (Pivot Table): Many-to-many relationship between Card and Member.
    *   `card_id`
    *   `member_id`

### 2. Features

*   **Board Management**:
    *   Create, Read, Update, Delete Boards.
*   **List Management**:
    *   Create, Read, Update, Delete Lists within a Board.
    *   Reorder Lists.
*   **Card Management**:
    *   Create, Read, Update, Delete Cards within a List.
    *   Move Card between Lists (drag and drop).
    *   Reorder Cards within a List.
    *   Assign Tags to Cards.
    *   Assign Members to Cards.
    *   Set/Update Due Date for Cards.

### 3. Task Breakdown

#### Backend (Laravel API with SQLite)

1.  **Project Setup**:
    *   Initialize Laravel project.
    *   Configure SQLite database.
    *   Install necessary packages (e.g., Laravel Sanctum for API authentication, though we'll start without it for simplicity and add if required).
2.  **Database Migrations**:
    *   Create migration for `boards` table.
    *   Create migration for `lists` table (with `board_id` FK).
    *   Create migration for `cards` table (with `list_id` FK).
    *   Create migration for `tags` table.
    *   Create migration for `members` table.
    *   Create pivot table migration for `card_tag`.
    *   Create pivot table migration for `card_member`.
    *   Run migrations.
3.  **Models and Relationships**:
    *   Create Eloquent models for Board, List, Card, Tag, Member.
    *   Define relationships between models (one-to-many, many-to-many).
4.  **API Endpoints (Controllers & Routes)**:
    *   **Boards**:
        *   `GET /api/boards` (index)
        *   `POST /api/boards` (store)
        *   `GET /api/boards/{board}` (show)
        *   `PUT /api/boards/{board}` (update)
        *   `DELETE /api/boards/{board}` (destroy)
    *   **Lists**:
        *   `GET /api/boards/{board}/lists` (index)
        *   `POST /api/boards/{board}/lists` (store)
        *   `PUT /api/lists/{list}` (update - including reorder)
        *   `DELETE /api/lists/{list}` (destroy)
    *   **Cards**:
        *   `GET /api/lists/{list}/cards` (index)
        *   `POST /api/lists/{list}/cards` (store)
        *   `GET /api/cards/{card}` (show)
        *   `PUT /api/cards/{card}` (update - title, description, due date)
        *   `PATCH /api/cards/{card}/move` (move between lists, reorder within list)
        *   `DELETE /api/cards/{card}` (destroy)
    *   **Tags**:
        *   `GET /api/tags` (index)
        *   `POST /api/tags` (store)
        *   `PUT /api/tags/{tag}` (update)
        *   `DELETE /api/tags/{tag}` (destroy)
    *   **Card-Tag (Attach/Detach)**:
        *   `POST /api/cards/{card}/tags/{tag}` (attach)
        *   `DELETE /api/cards/{card}/tags/{tag}` (detach)
    *   **Members**:
        *   `GET /api/members` (index)
        *   `POST /api/members` (store)
        *   `PUT /api/members/{member}` (update)
        *   `DELETE /api/members/{member}` (destroy)
    *   **Card-Member (Assign/Unassign)**:
        *   `POST /api/cards/{card}/members/{member}` (assign)
        *   `DELETE /api/cards/{card}/members/{member}` (unassign)
5.  **Seeding (Optional but Recommended)**:
    *   Create seeders for initial data (boards, lists, cards, tags, members).

#### Frontend (React with Vite)

1.  **Project Setup**:
    *   Initialize React project with Vite.
    *   Install necessary dependencies (e.g., Axios for API calls, React DnD for drag-and-drop).
2.  **Component Design**:
    *   **App Component**: Main layout, routing.
    *   **BoardList Component**: Displays all Boards.
    *   **Board Component**: Displays a single Board with its Lists.
    *   **ListComponent**: Displays a single List with its Cards.
    *   **CardComponent**: Displays a single Card.
    *   **Modals/Forms**: For creating/editing Boards, Lists, Cards, Tags, Members.
    *   **Drag and Drop Integration**: Implement drag-and-drop for Cards.
3.  **State Management**:
    *   Choose a state management solution (e.g., React Context API, Redux Toolkit if complexity grows).
    *   Manage application state (boards, lists, cards, tags, members).
4.  **API Integration**:
    *   Create service functions for all API calls (CRUD for boards, lists, cards, tags, members, card movements, assignments).
5.  **Styling**:
    *   Choose a styling approach (e.g., Tailwind CSS, styled-components, plain CSS).
    *   Implement basic styling for a Kanban interface.

#### Testing

*   **Backend**: Unit and Feature tests for API endpoints.
*   **Frontend**: Component and Integration tests.

#### Deployment

*   Basic deployment instructions (e.g., Docker, Heroku, Vercel).
