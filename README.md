# php_aria

The files I studied while learning PHP consist of several PHP folders and files. They also contain various fundamental information about PHP, such as data types, conditional statements, functions, classes, modules, and much more.

<p align="center">
  <a href="#introduction">introduction</a> •
  <a href="#table-of-contents">table of contents</a> •
  <a href="#download">Download</a> •
  <a href="#related">Related</a> •
  <a href="#license">License</a>
</p>

<p id="introduction"></p>

## 🚀 introduction
"In my journey as a PHP developer, I have delved into a comprehensive file encompassing the fundamental elements of PHP development. This file equips me not only with essential PHP programming skills but also serves as a treasure trove of invaluable PHP-related information and references. This amalgamation of knowledge has been instrumental in shaping my understanding of PHP development, making it an indispensable asset in my quest to master the art of creating PHP experiences."

<p align="left"> <a href="#">
  <img alt="php" src="https://img.shields.io/badge/-PHP-777BB4?style=flat-square&logo=php&logoColor=white" />
  </a>
</p>

<p id="table-of-contents"></p>

## 📋 Table of Contents
<details>
  <summary><b>Installing PHP</b></summary>

  1. **Installing PHP on Linux**
     - Open the terminal.
     - Use the following commands to install PHP and Apache (if not already installed):
       ```sh
       sudo apt-get update
       sudo apt-get install php apache2
       ```
     - Verify the PHP installation with the command:
       ```sh
       php -v
       ```
  2. **Installing PHP on Windows**
     - Download PHP
        - Open a web browser and visit the official PHP website at https://www.php.net/downloads.php.
        - Choose the PHP version you want to install. Select the Non-thread safe version if you're not using Apache with the PHP module.
        - Download the zip file for Windows. Make sure to choose the version that matches your operating system architecture (x86 for 32-bit, x64 for 64-bit).
     - Extract the PHP Files
        - Open the downloaded zip file.
        - Extract its contents to a location of your choice. For example, you can extract it to the C:\php directory.
     - Configure PHP
        - Open the directory where you extracted PHP.
        - Copy the php.ini-development file and rename it to php.ini
     - Configure the PATH
        - Right-click on the "This PC" or "Computer" icon on your desktop or in File Explorer.
        - Select "Properties" and choose "Advanced system settings" on the left panel.
        - Click on "Environment Variables."
        - In the "System variables" section, select the "Path" variable and click "Edit."
        - Click "New" and add the path to the PHP directory (e.g., C:\php).
        - Click "OK" to close all windows.
     - Test PHP Installation
        - Open the Command Prompt.
        - Type php -v and press Enter. This should display the installed PHP version.
</details>

<details>
  <summary><b>Installing PHP with XAMPP</b></summary>

  1. **Installing PHP Using XAMPP**
     - Download and install XAMPP according to your Windows operating system.
     - Run the "XAMPP Control Panel" application.
     - Click the "Start" button next to the Apache and MySQL modules.
     - Open a web browser and go to the http://localhost address to confirm a successful XAMPP installation.
     - To access PHPMyAdmin, visit http://localhost/phpmyadmin.
  2. **Adding XAMPP to your PATH**
     - Open the Terminal:
     - Edit the .bashrc (or .zshrc) File:
       - To edit the .bashrc file (or .zshrc if you're using Zsh), use the nano text editor or any other text editor you prefer. For example, to edit the .bashrc file, use the following command:
       ```sh
       nano ~/.bashrc
       ```
     - Add XAMPP to Your PATH:
       - Within the .bashrc file, add the following line to append the XAMPP bin directory to your PATH. Replace /opt/lampp with the installation path of your XAMPP if it's different:
       ```sh
       export PATH="/opt/lampp/bin:$PATH"
       ```
     - Save and Exit:
       - Press Ctrl+O to save the changes, and then press Enter. Next, press Ctrl+X to exit the text editor.
     - Reload Your Shell Profile:
       - To activate the changes you made, run the following command:
       ```sh
       source ~/.bashrc
       ```
       - If you're using Zsh, replace .bashrc with .zshrc in the command above.
     - Check PHP Version:
       - Now, you can verify whether XAMPP and PHP are accessible from the Linux terminal by running the following command:
       ```sh
       php --version
       ```
  3. **Start XAMPP in localhost**
     - Launch XAMPP with the following command (ensure you have superuser permissions):
       ```sh
       sudo /opt/lampp/lampp start
       ```
     - Run the XAMPP Control Panel with the command:
       - example
       ```sh
       sudo /opt/lampp/manager-linux-x64.run
       ```
     - Stop XAMPP with the following command:
       ```sh
       sudo /opt/lampp/lamp stop
       ```
</details>

<p id="download"></p>

## 🔨 download

1. Open a terminal or command prompt on your computer.
2. Navigate to the directory where you want to save this project.
3. Use the following command to download the project from the GitHub repository:
```sh
git clone https://github.com/ariafatah0711/php_aria.git
```

<p id="related"></p>

## 📈 related

<p id="license"></p>

## ©️ license
<a href="https://github.com/ariafatah0711" alt="CREATED"><img src="https://img.shields.io/static/v1?style=for-the-badge&label=CREATED%20BY&message=ariafatah0711&color=000000"></a>
<a href="https://github.com/ariafatah0711/ariafatah0711/blob/main/LICENSE" alt="LICENSE"><img src="https://img.shields.io/static/v1?style=for-the-badge&label=LICENSE&message=MIT&color=000000"></a>
