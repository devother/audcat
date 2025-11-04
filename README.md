## 🌟 Introduction
This project was created and developed during my student years from 2014-2016. It all started with a presentation where my topic aligned with that of a colleague, who later became a close friend. Together, we began building an ecosystem for people with visual impairments. 

At that time, there was no GPT or advanced AI technology - Apple's Siri could only play and stop music. Therefore, we attempted to implement all the features ourselves. The first version of the website used our own recorded voices and custom speech processing. Later, we integrated various libraries...

I plan to refactor this project and rewrite the logic in the future. For now, the "history" branch awaits the continuation of this story :)

# AudCat ♿
**Accessibility-focused website for users with visual impairments**

## 📖 Description
AudCat is an innovative web platform specifically designed for users with visual impairments, featuring advanced voice assistance and comprehensive accessibility features.

## 🎯 Project Vision
Creating an inclusive digital experience that empowers users with visual impairments through innovative technology and thoughtful design.

---

## 🔄 Planned Improvements

### 🏗 Architecture Update
```
audcat/
├── 🏠 index.php                 # Main page  
├── 🔊 voice-assistant/          # Voice assistant module
│   ├── speech-synthesis/        # Text-to-speech engine
│   ├── voice-commands/          # Voice recognition system
│   └── navigation-engine/       # Smart navigation logic
├── ♿ accessibility/             # Core accessibility features
│   ├── contrast-modes/          # High contrast themes
│   ├── font-scaling/            # Dynamic text resizing
│   └── keyboard-nav/            # Enhanced keyboard navigation
├── 👁️ screen-reader/            # Screen reader compatibility
│   ├── aria-labels/             # ARIA attribute management
│   ├── semantic-html/           # Accessible markup generator
│   └── focus-management/        # Smart focus control
├── 🎨 high-contrast/            # Visual enhancement themes
│   ├── dark-mode/               # Low light themes
│   ├── high-contrast/           # Maximum contrast themes
│   └── color-blind/             # Color blindness support
├── 📱 adaptive-ui/              # Responsive and adaptive interface
└── 🔧 config/                   # User preferences and settings
```

## ✨ Key Features

### 🔊 Voice Assistant Capabilities
| Feature | Description |
|---------|-------------|
| 🎙 **Content Vocalization** | Advanced text-to-speech with natural voice patterns |
| 🗺 **Voice Navigation** | Intuitive voice commands for seamless website control |
| 🔍 **Smart Reading** | Context-aware reading with intelligent pauses and emphasis |
| ⚡ **Quick Commands** | Customizable hotkeys and voice shortcuts |
| 🎯 **Intent Recognition** | Understanding user commands with high accuracy |

### 🌈 Accessibility Excellence
- **🎨 High Contrast Themes** - Multiple carefully tested color schemes
- **📏 Large Interactive Elements** - Generously sized buttons and controls
- **👁️ Screen Reader Optimized** - Full compatibility with JAWS, NVDA, VoiceOver
- **⌨️ Comprehensive Keyboard Navigation** - Complete hands-free operation
- **📝 Detailed Alternative Descriptions** - Rich context for all visual elements
- **🔊 Audio Feedback** - Sound cues for interactions and notifications

---

## 🛠 Technology Stack

### Backend
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

### Frontend
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

### Libraries & APIs
- **Web Speech API** - Advanced speech synthesis and recognition
- **jQuery** - Simplified DOM manipulation and event handling
- **Bootstrap** - Responsive framework for consistent layout
- **ARIA Live Regions** - Real-time content updates for screen readers

---

## ⚙️ Installation & Setup

### Prerequisites
- Web server (Apache/Nginx)
- PHP 7.4+
- MySQL 5.7+
- Modern browser with Web Speech API support

