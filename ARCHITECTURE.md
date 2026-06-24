# System Architecture

## Agent Roles
- **Brain (Orchestrator):** Hermes Agent. [cite_start]It is responsible for planning, maintaining memory across sessions, and executing autonomous tasks (cron jobs)[cite: 131, 150].
- **Hands (Coding Agent):** OpenClaw. [cite_start]It receives instructions from Hermes, executes the shell commands, writes the code, and reports back[cite: 40, 87, 126].

## Slack Channel Scheme
[cite_start]Our system operates through a structured channel workflow to ensure visibility and human oversight[cite: 197]:
- `#sprint-main`: Used for communication with the Brain (Hermes). [cite_start]All plans, status updates, and high-level decisions are posted here[cite: 196].
- `#agent-coder`: Used for technical execution. [cite_start]Hermes assigns coding tasks here, and OpenClaw works and reports its progress[cite: 196].
- [cite_start]`#agent-log`: The raw audit trail of all agent activity and autonomous runs[cite: 196].

## Model Routing
[cite_start]To optimize for both intelligence and speed, we routed our agents as follows[cite: 224, 236]:
- **Brain (Planning/Reasoning):** [Insert Model Used, e.g., Groq / Gemini 2.5-flash]. [cite_start]Chosen for its reasoning capabilities and ability to manage context[cite: 236].
- **Hands (Execution/Coding):** [Insert Model Used, e.g., Ollama / qwen2.5-coder]. [cite_start]Chosen for efficient, high-speed coding performance[cite: 237].