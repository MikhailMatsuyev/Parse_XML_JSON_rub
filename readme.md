English

	1. Create page with aoto refreshin every 3 sec rate of RUR
	2. sources:http://www.cbr.ru/scripts/XML_daily.asp and https://query.yahooapis.com/v1/public/yql?q=select+*+from+yahoo.finance.xchange+where+pair+=+%22USDRUB,EURRUB%22&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=
	3. If source fails app gets rate from second source.
	PHP, OOP, Laravel

Russian
1. Источники для получения курса:

http://www.cbr.ru/scripts/XML_daily.asp
и
https://query.yahooapis.com/v1/public/yql?q=select+*+from+yahoo.finance.xchange+where+pair+=+%22USDRUB,EURRUB%22&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=
Предполагается, что список может быть расширен.

2. Должен быть задан порядок опроса источников.
3. В случае, если источник недоступен, необходимо переключиться на прием данных с другого источника.
 
Реализация на PHP с использованием методологии ООП, желательно применение фреймворка Laravel.
