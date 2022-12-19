import memcache

mc = memcache.Client(['memcached:11211'], debug=0)

# Set some value
mc.set('pythonTest', 'somePythonValue')

# Retrieve value by key name
value = mc.get('pythonTest')

print(value)

# Set another value
mc.set('number', 100)

# Change (increment) value by specified key
mc.incr('number')

value2 = mc.get('number')

print(value2)

# Set multiple values
mc.set_multi({
    'firstname': 'Bart',
    'lastname': 'Mazurek',
    'email': 'bartlomiejmazurek9@gmail.com'
})

value3 = mc.get_multi(['firstname', 'email'])

print(value3)
