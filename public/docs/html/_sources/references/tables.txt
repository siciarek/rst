Tabele
======

Tabele inline
-------------

+------------------------+------------+---------------+
| pracownik              | dział      | liczba pobrań |
+========================+============+===============+
| Agnieszka Bachanek     | IT         | 1464          |
+------------------------+------------+---------------+
| Tomasz  Gęsikowski     | RKS        | 1055          |
+------------------------+------------+---------------+
| Piotr Witkowski        | RKS        | 738           |
+------------------------+------------+---------------+
| Przemysław Przyniczka  | RKS        | 685           |
+------------------------+------------+---------------+
| Wiktor Skórczewski     | RKS        | 518           |
+------------------------+------------+---------------+
| Dariusz  Armatowski    | RKS        | 496           |
+------------------------+------------+---------------+
| Marcin Paździorko      | Handel     | 476           |
+------------------------+------------+---------------+

.. code-block:: rst

    +------------------------+------------+---------------+
    | pracownik              | dział      | liczba pobrań |
    +========================+============+===============+
    | Agnieszka Bachanek     | IT         | 1464          |
    +------------------------+------------+---------------+
    | Tomasz  Gęsikowski     | RKS        | 1055          |
    +------------------------+------------+---------------+
    | Piotr Witkowski        | RKS        | 738           |
    +------------------------+------------+---------------+
    | Przemysław Przyniczka  | RKS        | 685           |
    +------------------------+------------+---------------+
    | Wiktor Skórczewski     | RKS        | 518           |
    +------------------------+------------+---------------+
    | Dariusz  Armatowski    | RKS        | 496           |
    +------------------------+------------+---------------+
    | Marcin Paździorko      | Handel     | 476           |
    +------------------------+------------+---------------+


======================== ============ ===============
 pracownik                dział        liczba pobrań 
======================== ============ ===============
 Agnieszka Bachanek       IT           1464          
 Tomasz  Gęsikowski       RKS          1055
 Piotr Witkowski          RKS          738
 Przemysław Przyniczka    RKS          685
 Wiktor Skórczewski       RKS          518
 Dariusz  Armatowski      RKS          496
 Marcin Paździorko        Handel       476
======================== ============ ===============

.. code-block:: rst

    ======================== ============ ===============
     pracownik                dział        liczba pobrań
    ======================== ============ ===============
     Agnieszka Bachanek       IT           1464
     Tomasz  Gęsikowski       RKS          1055
     Piotr Witkowski          RKS          738
     Przemysław Przyniczka    RKS          685
     Wiktor Skórczewski       RKS          518
     Dariusz  Armatowski      RKS          496
     Marcin Paździorko        Handel       476
    ======================== ============ ===============


Tabela z danymi CSV
-------------------

.. csv-table:: Lista pracowników
    :header: "pracownik","dział","liczba pobrań"
    :widths: 100, 50, 50

    "Agnieszka Bachanek","IT","1464"
    "Tomasz  Gęsikowski","RKS","1055"
    "Piotr Witkowski","RKS","738"
    "Przemysław Przyniczka","RKS","685"
    "Wiktor Skórczewski","RKS","518"
    "Dariusz  Armatowski","RKS","496"
    "Marcin Paździorko","Handel","476"

.. code-block:: rst

    .. csv-table:: Lista pracowników
        :header: "pracownik","dział","liczba pobrań"
        :widths: 100, 50, 50

        "Agnieszka Bachanek","IT","1464"
        "Tomasz  Gęsikowski","RKS","1055"
        "Piotr Witkowski","RKS","738"
        "Przemysław Przyniczka","RKS","685"
        "Wiktor Skórczewski","RKS","518"
        "Dariusz  Armatowski","RKS","496"
        "Marcin Paździorko","Handel","476"

Tabela z danymi pobieranymi z pliku CSV
---------------------------------------

.. csv-table::
    :header-rows: 1
    :widths: 100, 50, 50
    :file: data/users.csv


.. code-block:: rst

    .. csv-table::
        :header-rows: 1
        :widths: 100, 50, 50
        :file: data/users.csv

Tabela z danymi pobieranymi z pliku CSV (parametryzowana)
---------------------------------------------------------

.. csv-table::
    :widths: 100, 50, 50
    :header-rows: 1
    :stub-columns: 1
    :file: data/users.csv
    :encoding: utf8
    :delim: ,
    :quote: "
    :keepspace:
    :escape: \


.. code-block:: rst

    .. csv-table::
        :widths: 100, 50, 50
        :header-rows: 1
        :stub-columns: 1
        :file: data/users.csv
        :encoding: utf8
        :delim: ,
        :quote: "
        :keepspace:
        :escape: \


Tabela z danymi CSV pobieranymi z URL
-------------------------------------

.. .. csv-table::
    :header-rows: 1
    :widths: 100, 50, 50
    :url: https://rst.ses-support.net/data/users.php

.. code-block:: rst

    .. csv-table::
        :header-rows: 1
        :widths: 100, 50, 50
        :url: https://rst.ses-support.net/data/users.php


Zawartość skryptu ``users.php``

.. literalinclude:: ../../../../../../public/data/users.php
    :language: php

