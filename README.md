Web-Repository von **Zimatech**, einem Unternehmen mit einer langen und erfolgreichen Geschichte im Bereich der **Formtechnik**. Diese auf PHP basierende Website dient dazu, unsere Dienstleistungen, Projekte und Innovationen unseren Kunden und Partnern ansprechend zu präsentieren.

## 🛠️ Technologie-Stack

- **Backend**: PHP (mit Composer verwaltet)
- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Entwicklungsumgebung**: Docker
- **Kartenintegration**: Google Maps API (auf der Kontakt-Seite verwendet)

## 🌐 Website-Struktur

Die Website besteht aus mehreren Hauptseiten sowie Unterseiten:

### Hauptseiten
- **Startseite** (Homepage)
- **Unternehmen** (Informationen über Zimatech)
- **Ausbildung** (Infos für Auszubildende)
- **Services** (Übersicht unserer Dienstleistungen)
- **Kunststoffnetzwerk** (Kooperation im Bereich Kunststoff)
- **Kontakt** (Kontaktseite mit Google Maps Integration)

### Unterseiten im Bereich Services
- **Konstruktion**
- **Fräsbearbeitung**
- **Rapid Prototyping**
- **Reverse Engineering**
- **Mobile Messtechnik**

### Rechtliche Seiten
- **Datenschutz**
- **Impressum**
- **Sitemap**

## 🐳 Projektstart mit Docker

So startest du das Projekt in einer Docker-Umgebung:

```bash
docker-compose up --build
```

Dies richtet PHP, Apache/Nginx (je nach Konfiguration) sowie weitere benötigte Dienste ein.
Zugriff auf die Website

Öffne im Browser:
http://localhost:8000

## 📦 Composer

Installiere die PHP-Abhängigkeiten mit Composer:

```
composer install
```

## 🎨 Frontend

Das Frontend basiert auf Bootstrap und nutzt individuelle HTML, CSS und JavaScript, um eine moderne und responsive Benutzeroberfläche zu bieten.
## 🚧 Hinweise zur Entwicklung

lle Seiten verwenden wiederverwendbare Template-Teile (Header, Footer etc.), um einheitliches Layout sicherzustellen.
Die Seiten-Routing erfolgt manuell oder über einen einfachen PHP-Router.
Achte darauf, dass die Dateiberechtigungen in den Docker-Containern korrekt gesetzt sind, damit Änderungen im Entwicklungsprozess übernommen werden.

## 🔒 Sicherheit & Datenschutz

DSGVO-konform: Rechtliche Seiten wie Datenschutz und Impressum sind enthalten.
Die Google Maps API wird ausschließlich auf der Kontakt-Seite geladen, um die Datenerfassung zu minimieren.

## 📄 Lizenz

Dieses Projekt ist proprietär und wird von der Zimatech GmbH betreut. Alle Rechte vorbehalten