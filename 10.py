# 10 Xpath Functions...

from lxml import etree

# Sample XML
xml_data = """<root>
    <parent>
        <child id='1'>Apple</child>
        <child id='2'>Banana</child>
        <child id='3'>Apricot</child>
    </parent>
</root>"""

# Parse XML
tree = etree.XML(xml_data)

# Using XPath functions
print("Contains 'A':", tree.xpath("//child[contains(text(), 'A')]/text()"))  # Elements containing 'A'
print("Starts with 'Ap':", tree.xpath("//child[starts-with(text(), 'Ap')]/text()"))  # Elements starting with 'Ap'
print("Total child elements:", tree.xpath("count(//child)"))  # Count of child elements

# ---------------------------------------------------------------------------------------------------------------------

from lxml import etree

# Sample XML data
xml_data = """<books>
    <book id="1">
        <title>Learning XML</title>
        <author>John Doe</author>
        <price>45.00</price>
    </book>
    <book id="2">
        <title>XPath Essentials</title>
        <author>Jane Smith</author>
        <price>35.00</price>
    </book>
    <book id="3">
        <title>Advanced XML</title>
        <author>John Doe</author>
        <price>55.00</price>
    </book>
</books>"""

# Parse the XML data
tree = etree.XML(xml_data)

# XPath expressions using different functions
titles = tree.xpath("//title/text()")  # Extract all book titles
distinct_authors = tree.xpath("distinct-values(//author/text())")  # Get distinct author names
total_price = sum(map(float, tree.xpath("//price/text()")))  # Calculate total book price
count_books = tree.xpath("count(//book)")  # Count number of books

# Print results
print("Book Titles:", titles)
print("Distinct Authors:", distinct_authors)
print("Total Price:", total_price)
print("Number of Books:", count_books)