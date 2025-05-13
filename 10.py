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
