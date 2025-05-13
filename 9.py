from lxml import etree

# Sample XML
xml_data = """<root>
    <parent>
        <child id='1'>First</child>
        <child id='2'>Second</child>
    </parent>
</root>"""

# Parse XML
tree = etree.XML(xml_data)

# XPath examples
print("Child:", tree.xpath("//parent/child/text()"))  # Selects children of <parent>
print("Parent:", tree.xpath("//child[1]/../name()"))  # Selects parent of first <child>
print("Sibling:", tree.xpath("//child[1]/following-sibling::child/text()"))  # Next sibling
