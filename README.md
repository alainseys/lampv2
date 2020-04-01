# lampv2

<h2>Login into box</h2>
<hr />
<pre>
docker exec -it php73 /bin/bash
docker exec -it phpmyadmin /bin/bash
docker exec -it mysql8 /bin/bash
</pre>

<h2>Configuration<h2>

<h3>Apache</h3>
<ul>
<li>apache http://127.0.0.1:8000</li>
<li>Phpmyadmin http://127.0.0.1:8080</li>
</ul>
<p>The log file from apache are redirected to your local machine inside apache2/logs directory, here you can consult your access,error and vhost log files.</p>

<h3>Mysql</h3>
<p>The credentials and database that are used you can consult in docker-compose.yml file or you can create a .env and call them from there</p>

<h3>Php</h3>
<p>The version of php that is used in 7.3</p>

<p>Installed extensions:</p>
<ul>
    <li>Mysql</li>
    <li>Mbstring</li>
    <li>json</li>
    <li>pear</li>
    <li>fpm</li>
    <li>zip</li>
    <li>curl</li>
    <li>xml</li>
    <li>gd</li>
    <li>xdebug</li>
    <li>php devel</li>
</ul>
<b><p>Extension not in the list ? add a new line to Docerfile inside the php dirtory with the extension you wish to install</p></b>

<pre>
RUN apt-get install php-myextension -y
</pre>

<p>after you added the extension to the list build the docker container (docker-compose up --build), then the new extension wil be available you can check this by openening info.php</p>