Podstawowe elementy
-------------------

Dokumentacja niniejsza jest generowana z plików w formacie ``reStructuredText``, w dokumencie omówione zostały
najbardziej przydatne elementy formatu.

Więcej na stronie http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html

``reStructuredText`` jest plikiem w formacie ``text/plain`` zawierającym dodatkowe elementy określające strukturę dokumentu.

System generujący dokumentację to ``SPHINX Python Documentation Generator`` powstał początkowo na potrzeby dokumentacji
języka programowania ``Python`` (funkcjonalność zbliżona do ``javadoc``, ``phpdoc`` itp.) lecz po wprowadzeniu
obsługi koloryzatorów składni ``Pygments`` i zestawu narzędzi ``Sphinx DocUtils``
jest użyteczny do generowania dowolnego rodzaju dokumentacji, nie tylko programistycznej.

Więcej na stronie http://sphinx-doc.org/contents.html


Bieżąca dokumentacja
====================

    * w formacie ``HTML`` dostępna pod adresem https://rst.ses-support.net
    * w formacie ``PDF`` dostępna pod adresem https://rst.ses-support.net/docs/pdf/document.pdf

Komentarze
==========

Komentarz jednoliniowy:

.. To jest komentarz.

.. code-block:: rst

    .. To jest komentarz.

Można wcinać tekst po rozpoczęciu komentarza aby uzyskać efekt komentarza wielonliniowego:

..
   Ten cały wcięty blok
   jest komentarzem.

   I tu nadal jest komentarz.

.. code-block:: rst

    ..
       Ten cały wcięty blok
       jest komentarzem.

       I tu nadal jest komentarz.


Formatowanie tekstu
===================

To jest nieformatowany tekst, *a to jest kursywa*, **to jest pogrubienie**,
``to jest przykład kodu`` i znów nieformatowany tekst.

.. code-block:: rst

    To jest nieformatowany tekst, *a to jest kursywa*, **to jest pogrubienie**,
    ``to jest przykład kodu`` i znów nieformatowany tekst.
